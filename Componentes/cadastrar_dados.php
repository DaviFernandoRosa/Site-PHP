
<?php

//arquivo para cadastrar os dados do formulario cadastro
include "connect.php";   //ligando esta pagina ao banco de dados. 



//variaveis pegando valores do fomulario cadastro
$nome			=	$_POST['nome'];
$email			=	$_POST['email'];
$senha			=	$_POST['senha'];
$repetesenha	=	$_POST['repetesenha'];

/* Mostrar dados na tela
echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Senha: $senha<br>";
echo "Resenha: $repetesenha<br";
*/

//Mostrar se minhas variaveis estao vazias
//variavel registro sera usada se o usuario esta habilitado para fazer o cadastro
$registro = false;
if( $nome != ""  &&  $email != ""  &&  $senha !=""  &&  $repetesenha !=""){
	    if($senha != $repetesenha) {
		     echo "<script>alert('Senhas não Conferem...');window.history.go(-1);</script>";
	   }else{
	   	     //habilitando para o cadastro
            $registro = true;

	   }
}else{
	echo "<script>alert('É necessario preencher todos os campos!');window.history.go(-1);</script>";
}


$sql = mysqli_query($link,"SELECT * FROM tb_user order by id_user desc limit 1 ");
while($line = mysqli_fetch_array($sql)){
	$id = $line['id_user'];
	$email_user = $line['email'];
	//$nome_user = $line['nome'];
}

//echo "$id";
//echo "nome_user";

//pegando a data e a hora do computador
$dt = date('y-m-d');
$hr = date('H:i:s');

//cadastrando o novo usuario e direcionando ele para a tela principal
if($registro == true && $email != $email_user){
          mysqli_query($link,"INSERT INTO tb_user(nome,email,senha,nivel,dt,hr)VALUES
          	('$nome','$email','$senha',5,'$dt','$hr')");
          echo "<script>alert('Usuario cadastrado com Sucesso!');window.location.href='index.php';</script>";
 }else{
 	      echo "<script>window.history.go(-1);</script>";
 }


?>