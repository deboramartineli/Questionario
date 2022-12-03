<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulado</title>
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
    <br>
<div class="row justify-content-center ">
    
    <div class="col-md-5 col-sm-12 border border- border-5">
<h3> Responda as questões</h3>
  


<?php
include "conexao.php";

//$query = "select * from perguntas p inner join alternativas a on (p.id = a.id_pergunta) "

$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>
<form action="resultado.php" method="post">

<?php
while($linha = mysqli_fetch_array($resultado))
{
    echo "<h2>".$linha["id"]. "  -  ".$linha["pergunta"]."</h2>";
    $query2 = "select * from alternativas where pergunta_id = ".$linha["id"];
    $resultado2 = mysqli_query($conexao,$query2);
    $contagem = 1;
    while($linha2 = mysqli_fetch_array($resultado2)){
        ?>
            <p>
                <input type="radio" 
                        name="<?php echo $linha["id"];?>" 
                        value="<?php echo $contagem; ?>" >
                        <?php echo $linha2["alternativa"]; ?>
            </p>
        <?php
        $contagem++;
    }

}
?>
<button type="submit">Enviar Questionario</button>
</div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</div>
</html>