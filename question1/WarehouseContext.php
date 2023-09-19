<?php
require_once 'question1/WarehouseStrategy.php';
require_once 'question1/FillData.php';
use YaLinqo\Enumerable as Enumerable;
require_once 'vendor/autoload.php';

class WarehouseContext 
{
    /**
        * @var CountWarehouseStrategy
    */
    private $strategy;

    function setStrategy(WarehouseStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    function __construct(WarehouseStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    function CountProducts(WarehouseType $warehouseType): int
    {
        if(empty($warehouseType))
        {
            throw new InvalidArgumentException(
                "Пустой аргумент типа WarehouseType");
        }

        $data = new FillData();
        $warehouseIds = (Enumerable::from($data->getWarehouses())
            ->where((function($warehouse) use ($warehouseType) {
                return $warehouse->getType() 
                    == $warehouseType;})))
            ->select(function($warehouse) {return $warehouse->getId();})
            ->toArray();

        return $this->strategy->CountProductsByWarehouse(
            $data->getDistributions(),
            $warehouseIds);
    }
}
?>
