<?php

class Valores{
private $valor;

public function __construct($valor){
    $this->valor=$valor;

}
 public  function setValor($valor){

  $this->valor=$valor;
}

public function getValor(){
    return $this->valor;

}
}
?>