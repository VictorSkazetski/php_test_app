<?php
class Distribution 
{
    private int $id;
    private int $productId;
    private int $warehouseId;
    private int $quantity;

    function getId(): int
    {
        return $this->id;
    }

    function getProductId(): int
    {
        return $this->productId;
    }

    function getWarehouseId(): int
    {
        return $this->warehouseId;
    }

    function getQuantity(): int
    {
        return $this->quantity;
    }

    function __construct($id, $productId, $warehouseId, $quantity) 
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->warehouseId = $warehouseId;
        $this->quantity = $quantity;
    }
}
?>