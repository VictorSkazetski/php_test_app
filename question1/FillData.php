<?php
require_once 'question1/Distribution.php';
require_once 'question1/Office.php';
require_once 'question1/Product.php';
require_once 'question1/Warehouse.php';
require_once 'question1/WarehouseType.php';

class FillData 
{
    /**
        * @var Distribution[]
    */
    private $distributions;
    /**
        * @var Office[]
    */
    private $offices;
    /**
        * @var Product[]
    */
    private $products;
    /**
        * @var Warehouse[]
    */
    private $warehouses;

    function getDistributions(): array
    {
        return $this->distributions;
    }

    function getOffices(): array
    {
        return $this->offices;
    }

    function getProducts(): array
    {
        return $this->products;
    }

    function getWarehouses(): array
    {
        return $this->warehouses;
    }

    function __construct() 
    {
        $this->fillOffices();
        $this->fillProducts();
        $this->fillWarehouses();
        $this->fillDistribution();
    }

    private function fillOffices(): void 
    {
        $this->offices = [
            new Office(1, "Office 1"),
            new Office(2, "Office 2")
        ];
    }

    private function fillProducts(): void 
    {
        $this->products = [
            new Product(1, "Product A"),
            new Product(2, "Product B"),
            new Product(3, "Product C"),
            new Product(4, "Product D"),
        ];
    }

    private function fillWarehouses(): void 
    {
        $this->warehouses = [
            new Warehouse(1, "Warehouse 1", WarehouseType::DefaultWarehouse, 1),
            new Warehouse(2, "Warehouse 2", WarehouseType::TempWarehouse, 1),
            new Warehouse(3, "Warehouse 3", WarehouseType::DefaultWarehouse, 2),
            new Warehouse(4, "Warehouse 4", WarehouseType::TempWarehouse, 2),
            new Warehouse(5, "Warehouse 5", WarehouseType::VirtualWarehouse, 2),
        ];
    }

    private function fillDistribution(): void 
    {
        $this->distributions = [
            new Distribution(1, 1, 1, 40),
            new Distribution(2, 2, 1, 30),
            new Distribution(3, 2, 2, 50),
            new Distribution(4, 1, 5, 50),
            new Distribution(4, 2, 5, -45),
            new Distribution(4, 2, 5, -55),
        ];
    }
}
?>