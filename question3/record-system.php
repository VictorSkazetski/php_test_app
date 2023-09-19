<?php
require_once 'Data/FormData.php';
include_once('../vendor/autoload.php');
include_once('../vendor/netresearch/jsonmapper/src/JsonMapper.php');

echo ini_get('error_log');

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json;');

class Dto 
{
  private string $id;

  function getId(): string {
    return $this->id;
  }

  function __construct(string $id) {
    $this->id = $id;
  }

  function getJSONEncode() {
    return json_encode(get_object_vars($this));
}
}

$mapper = new JsonMapper();
$formData = $mapper->map(file_get_contents( 'php://input' ), new FormData());
var_dump($formData);

$data = new Dto("Витя");

echo $data->getJSONEncode();
?>