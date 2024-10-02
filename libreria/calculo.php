
<?php

class Calculo{

private $diasTrabajados;
private $valorDia;
public $salario;
public $salud;


public function __construct(Valores $diasTrabajados, Valores $valorDia){
      $this ->diasTrabajados= $diasTrabajados;
      $this ->valorDia = $valorDia;
}



public function salario(){
    $this->salario =$this->diasTrabajados->getValor() * $this->valorDia->getValor();
   return $this -> salario; 
    
}

public function salud(){
    $this->salud =$this->  salario*0.12;
   return $this -> salud; 
}
}
?>