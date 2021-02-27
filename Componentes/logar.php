<?php
//arquivo logar
include "connect.php";

$email 	= 	$_POST['email'];
$senha 	=	$_POST['senha'];

if ($email != "" && $senha != ""){
//echo "Usuario logado";
	$sql = mysqli_query($link,"SELECT * FROM tb_user WHERE email = '$email'"); 
	$registro = mysqli_num_rows($sql);
	echo "$registro";
}else{
	echo "E necessario preencher todos os campos";
}


  ?>