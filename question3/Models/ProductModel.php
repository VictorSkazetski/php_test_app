<?php
class ProductModel {
    private int $id;
    private string $productName;
    private int $productPrice;
    private int $productCount;
    private int $productStock;
    private string $productStatusCount;

    function __construct(
        int $id, 
        string $productName,
        int $productPrice,
        int $productCount,
        int $productStock,
        string $productStatusCount) 
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productCount = $productCount;
        $this->productStock = $productStock;
        $this->productStatusCount = $productStatusCount;
    }
}
?>