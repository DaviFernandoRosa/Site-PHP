<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
  <title>CJ Net</title>
  <link rel ="stylesheet" type= "text/css" href= "css/formato.css">

</head>


<body>
    
<div id="geral">
  

       <div id="topo"> 
          <?php include "topo.php" ?>
       </div>

        <div class="menu_cad">
          <h1><a class="voltar_cad" href="index.php">&larr;Voltar </a></h1>
        </div>
       


       <div id="conteudo"> 
          <div class="divcor"><br><br>
                <h1 class="titulo_cad"> Cadastre-se</h1><br>
                  <form action="cadastrar_dados.php" method="POST" enctype="multipart/form-data">
                  <input type="text" name="nome"class="campos" placeholder="Digite Nome Completo.." ><br>
                  <input type="email" name="email" class="campos" placeholder="Digite um e-mail valido.."><br>
                  <input type="number" name="senha" class="campos"  placeholder="Senha.."required><br><br>
                  <input type="number" name="repetesenha" class="campos"  placeholder="Confirmar senha.."><br><br>
                  <input type="submit" value="Cadastrar"  class="btenviar"> 
                  <input type="reset" value="Limpar"  class="btlimpar">
          
          </div>     
         
            </form>







        
       </div>

       


       <div id="rodape"> 
        <?php include "rodape.php" ?>

       </div>
</div>














</body>



</html>