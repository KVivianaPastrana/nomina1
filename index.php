<?php
include('libreria/calculo.php');
include('libreria/definir.php');
 $valorDia =new Valores(10);
 $diasTrabajados =new Valores (10);

 $operaciones=new Calculo( $valorDia,$diasTrabajados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 echo 'El salario es de : '. $operaciones->salario();
 echo 'SALUD cuenta con el valor de  :' .$operaciones->salud(3);

    ?>
</body>
</html>
<?php

class Valores{
private $valor;

public function __construct($valor){
    $this->valor=$valor;

}
 public  function setValor($valor){

  $this->valor=$valor;
}

public function getvalor(){
    return $this->valor;

}
}
