<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <nav class="navbar"  style="background-color: white;">

<div class="container-fluid">
  <a class="navbar-brand" href="./css-2/logo.png">
    <img src="./css-2/logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-center">
    <strong>QUESTIONÁRIO ON LINE</strong>
  
    </a> 
</div>
      
      <div class="item-menu">
          
          <a href="./index.php"style="text-decoration:none"><strong>&nbsp&nbspREGISTRAR</strong></a>
          <a href="./questoes.php"style="text-decoration:none"><strong>&nbsp&nbspQUESTÕES</strong></a>
          <a href="./resultado.php"style="text-decoration:none"><strong>&nbsp&nbspRESULTADO</strong></a>
        
      </div>
      
  </div>
  
</nav>
</head>

<body>

<div class="row justify-content-center ">
    
    <div class="col-md-5 col-sm-12 border border- border-5">
<h3>Seu resultado</h3>
    
    <?php include "conexao.php";

if(isset($_POST) && !empty($_POST))
{
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    foreach ($_POST as $chave => $valor)
    {
        $respostaUsuario = $valor;
        $query = "select * from alternativas where pergunta_id = ".$chave;
        $resultado = mysqli_query($conexao, $query);
        $contagem = 1;
        while($linha2 = mysqli_fetch_array($resultado)){
            echo "<p>";
                if($linha2["correta"] == 1 )
                {
                    if($respostaUsuario== $contagem)
                    {
                        echo "Legal, acertou!";
                    }
                    else
                    {           
                        echo  "A correta é";
                    }
                    
                }
                else
                {
                    if($respostaUsuario== $contagem)
                    {
                        echo "Seu palpite";
                    }
                }
           
            ?>
            
                <input type="radio" 
                        name="<?php echo $linha2["pergunta_id"];?>" 
                        value="<?php echo $contagem; ?>" >
                        <?php echo $linha2["alternativa"]; ?>
            </p>
            
        <?php
        $contagem++;
        }
       echo " <br><br><br>";
    }
}
?>
</div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>