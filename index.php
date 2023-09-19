<?php
   require_once 'question1/FillData.php';
   require_once 'question1/DefaultWarehouseStrategy.php';
   require_once 'question1/WarehouseContext.php';
   require_once 'question1/VirtualWarehouseStrategy.php';
   require_once 'exceptions/NotImplementedMethodException.php';
   require_once 'question1/TempWarehouseStrategy.php';

   try {
      $defaultWarehouseContext = new WarehouseContext(
         new DefaultWarehouseStrategy());
      $virtualWarehouseContext = new WarehouseContext(
         new VirtualWarehouseStrategy());
      $tempWarehouseContext = new WarehouseContext(
         new TempWarehouseStrategy());
      $productCountOnVirtualWarehouse = $virtualWarehouseContext->CountProducts(
         WarehouseType::VirtualWarehouse);
      print_r("Количество продукции на виртуальных складах - ".
         $productCountOnVirtualWarehouse . "\r\n");
      $productCountOnDefaultWarehouse =$defaultWarehouseContext->CountProducts(
         WarehouseType::DefaultWarehouse);
      print_r("Количество продукции на обычных складах - " . 
         $productCountOnDefaultWarehouse . "\r\n");
      $productCountOnTempWarehouse =$tempWarehouseContext->CountProducts(
            WarehouseType::TempWarehouse);
   } 
   catch (NotImplementedMethodException $e) {
      echo $e->errorMessage();
   }
   catch (InvalidArgumentException $e) {
      echo $e->getMessage();
   }
?>