<?php
require_once 'vendor/autoload.php';
use YaLinqo\Enumerable as Enumerable;
require_once 'question1/WarehouseType.php';
require_once 'question1/WarehouseStrategy.php';

class DefaultWarehouseStrategy implements WarehouseStrategy
{
    function CountProductsByWarehouse(
        array $distributionData,
        array $defaultWarehouseIds): int
    {
        if(empty($distributionData) || empty($defaultWarehouseIds) )
        {
            throw new InvalidArgumentException(
                "Какой-то аргумент пустой... (расчет кол-во товаров [склад обычный])\r\n");
        }

        return array_sum((Enumerable::from($distributionData)
            ->where(function ($distribution) use ($defaultWarehouseIds) {
                return in_array($distribution->getWarehouseId(), 
                $defaultWarehouseIds);
            }))
            ->select(function($distribution) {
                return $distribution->getQuantity();})
            ->toList());
    }
}
?>