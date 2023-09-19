<?php
class NotImplementedMethodException extends Exception
{
    function errorMessage() {
        return $this->getMessage();
    }
}
?>
