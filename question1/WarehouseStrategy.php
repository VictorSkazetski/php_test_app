<?php
    interface WarehouseStrategy
    {
        function CountProductsByWarehouse(
            array $distributionData,
            array $warehouseData): int;
    }
?>