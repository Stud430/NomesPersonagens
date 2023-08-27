

<?php 
    /* SE o campo existir e NÃO estiver vazio, recebe o que foi digitado no campo de pesquisa, SE NÃO a variável receberá o alfabeto com letras maiúsculas e minúsculas.*/
    $digitado = isset($_GET["pAleatorias"]) and !empty($_GET["pAleatorias"]) ? $_GET["pAleatorias"] : "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz"; 

//$aleatorio = rand(3, 7); // Gera as posições 0,1,2.  posições palavras. 
    $NumAleatorio = strlen($digitado); // Conta o tamanho da variável $digitado

    for ($i = 0; $i < $NumAleatorio; $i++) { // Roda um número de vezes do tamanho do digitado.

    $sorteio = rand(3,7) // Sorteia um número entre 3 e 7 
        
    for ($i=0; $i < $NumAleatorio; $i++) { 
    $dividido = substr($digitado,0,1);    
    $NovoNome = array($dividido);
    }    
    
    //    echo $NovoNome;
    }

    

?>


<html>
<head>
    <title>Nomes para Personagens</title>
    <meta charset="utf-8">
    
<meta http-equiv="refresh" content="2"> 
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <style>
        body{
            background-color: lightseagreen;
        }
    </style>
</head>


<body>

<div class="principal">    

    <br><br>
    
    <center><h4>Nomes Aleatórios Para Personagens</h4></center>
    <!-- 1º Form - Digitar Qualquer Coisa -->
    <div class="formUM">
        <form method="get" enctype="multipart/form-data" action="index.php">
            <!--<label id="a">Digite Qualquer Coisa</label> -->
            
            <input type="text" name="pAleatorias" id="pAleatorias" class="form-control" placeholder="Digite Qualquer Coisa">
            
            <input type="submit" name="gerarNome" id="gerarBTN" class="btn btn-warning" value="Gerar">
        </form>
    </div>
    
    <hr>
    <br>
        <!-- 2º Form - Listagem de Possibilidades de Nomes -->

        <?php
            



        ?>
    


</div> <!-- Div Principal -->

</body>




</html>