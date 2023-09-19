<?php
require_once 'vendor/autoload.php';
use YaLinqo\Enumerable as Enumerable;
require_once 'question1/WarehouseStrategy.php';

class VirtualWarehouseStrategy implements WarehouseStrategy
{
    function CountProductsByWarehouse(
        array $distributionData,
        array $virtualWarehouseIds): int
    {
        if(empty($distributionData) || empty($virtualWarehouseIds) )
        {
            throw new InvalidArgumentException(
                "Какой-то аргумент пустой... (расчет кол-во товаров [склад виртуальный])\r\n");
        }

        return array_sum((Enumerable::from($distributionData)
            ->where(function ($distribution) use ($virtualWarehouseIds) {
                return in_array($distribution->getWarehouseId(), 
                    $virtualWarehouseIds);
            }))
            ->select(function($distribution) {
                return $distribution->getQuantity();})
            ->where(function($quantity) { 
                return $quantity < 0;})
            ->toList()) * -1;
    }
}
?>
