<?php
class Product 
{
    private int $id;
    private string $name;

    function getId(): int 
    {
        return $this->id;
    }

    function getName(): string 
    {
        return $this->name;
    }

    function __construct(int $id, string $name) 
    {
        $this->id = $id;
        $this->name = $name;
    }
}
?>