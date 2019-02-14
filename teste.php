<?php

$con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor");
$select = mysql_select_db("uploiad_plugin") or die("Sem acesso ao Sistema, Entre em contato com o Administrador, renatinhotsw@bgmail.com");

echo json_encode($_POST);
echo json_encode($_FILES);

$descricao = $_POST["descricao"];
$file_name = $_FILES["arquivo"]["name"];
$size = $_FILES["arquivo"]["size"];

$sql = "INSERT into tb_arquivo(file_name,ds_name,size) values";
$sql .= "('$file_name','$descricao', '$size')";

echo $sql;

$result = mysql_query($sql);

if($result){
  echo 'sucesso!';
}else{
  echo 'erro!';
}

 ?>
