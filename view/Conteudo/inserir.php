<?php
include '../../control/ConteudoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

if(!empty($data)){	
 $conteudoControl = new ConteudoControl();
 $conteudoControl->insert($obj);
 header('Location:listar.php');
}

?>