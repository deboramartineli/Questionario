<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="./css2/cabecalho.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./questoes.php">
  <link rel="stylesheet" href="./resultado.php">
</head>

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



    <?php

    include "conexao.php";

    if (isset($_POST) && !empty($_POST)) {
        $pergunta = $_POST["pergunta"];
        $a = $_POST["A"];
        $b = $_POST["B"];
        $c = $_POST["C"];
        $d = $_POST["D"];
        $e = $_POST["E"];
        $correta = $_POST["correta"];
        if (empty($pergunta)) {
    ?>


             <div class="alert alert-danger" role="alert">
                 Registre sua pergunta
             </div>


    <?php

        }else if (empty($a)) {
   ?>
             <div class="alert alert-danger" role="alert">
                 Inclua todas respostas
             </div>
    <?php

        }else if (empty($b)) {  
    ?>
             <div class="alert alert-danger" role="alert">
                 Inclua todas respostas
             </div>
             <?php

        }else if (empty($c)) {  
    ?>
            <div class="alert alert-danger" role="alert">
                Inclua todas respostas
            </div> 

            <?php

        }else if (empty($d)) {  
    ?>
             <div class="alert alert-danger" role="alert">
                 Inclua todas respostas
             </div>

             <?php

        }else if (empty($e)) {  
    ?>
             <div class="alert alert-danger" role="alert">
                 Inclua todas respostas
             </div>
    <?php
    

        }else if (empty($correta)) {  
    ?>
            <div class="alert alert-danger" role="alert">
                Escolha a resposta correta
            </div>
      
     <?php
        }else{


        $query = "insert into questoes (pergunta,a,b,c,d,e,correta) ";
        $query = $query . " values('$pergunta','$a','$b','$c','$d','$e','$correta')";
        $resultado = mysqli_query($conexao, $query);
    }
    }
    ?>
<br>



    <div class="row justify-content-center ">
    
        <div class="col-md-5 col-sm-12 border border border-5">
            <div class="mb-3 ">
                <form action="./index.php" method="post">
                

                    <h5>Faça sua pergunta</h5>
                    
                    <textarea class="form-label form-control" name="pergunta"></textarea>


                    <label>A)</label>
                    <input class="form-check-input" type="radio" name="correta" value="A" />
                    <input class="form-control" type="text" name="A" />

                    <br>

                    <label>B)</label>
                    <input class="form-check-input" type="radio" name="correta" value="B" />
                    <input class="form-control" type="text" name="B" />

                    <br>

                    <label>C)</label>
                    <input class="form-check-input" type="radio" name="correta" value="C" />
                    <input class="form-control" type="text" name="C" />

                    <br>

                    <label>D)</label>
                    <input class="form-check-input" type="radio" name="correta" value="D" />
                    <input class="form-control" type="text" name="D" />

                    <br>

                    <label>E)</label>
                    <input class="form-check-input" type="radio" name="correta" value="E" />
                    <input class="form-control" type="text" name="E" />

                    <br>

                    <button class="btn btn-success" type="submit">Registrar</button>

                </form>
                
            </div>
        </div>
    </div>
    
    <br>
   
   
</body>

</html>