<?php
class Warehouse 
{
    private int $id;
    private string $name;
    private WarehouseType $type;
    private int $officeId;

    function getId(): int
    {
        return $this->id;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getType(): WarehouseType
    {
        return $this->type;
    }

    function getOfficeId(): int
    {
        return $this->officeId;
    }

    function __construct(
        int $id, string $name, WarehouseType $type, $officeId) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->officeId = $officeId;
    }
}
?>