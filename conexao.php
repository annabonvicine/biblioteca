<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "biblioteca";

$conn = new mysqli($servidor,$usuario,$senha,$banco);

if($conn -> connect_error){
    die("Conexão falhou: ".$conn ->connect_error);
}





?>