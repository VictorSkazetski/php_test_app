<?php
class TempWarehouseStrategy implements WarehouseStrategy
{
    function CountProductsByWarehouse(
        array $distributionData,
        array $virtualWarehouseIds): int
    {
        throw new NotImplementedMethodException("все ок, пока не реализовываем");
    }
}
?>