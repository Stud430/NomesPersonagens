

<?php 
   
  // $digitado = isset($_GET["pAleatorias"]) and !empty($_GET["pAleatorias"]) ? $_GET["pAleatorias"] : "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";

    $digitado = !empty($_GET["pAleatorias"]) ? $_GET["pAleatorias"] : ' ';

  // $n=4; // Número de caracteres que eu quero que a string tenha.
    $n = strlen($digitado);
   $z = $digitado;

   

function GerarNome($n,$name) {
    //$characters = 'abcdefghijklmonpqrstuvxwyz'; // Valores que poderão fazer parte da senha.
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($name) - 1);
        $randomString .= $name[$index]; // Amazena o valor da posição $i da variável $characters 
        $aleatorio = rand(0, 2); // Gera as posições 0,1,2.  posições palavras. 
    }
  
    return $randomString;
}   // $palavras[valor da posição]."-".
  
//echo getName($n)."<br>";//.rand();


 

?>


<html>
<head>
    <title>Nomes para Personagens</title>
    <meta charset="utf-8">
    
<!--    <meta http-equiv="refresh" content="2">  -->
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
    <div id="NovoNome">    
        <?php
        
        if (empty($_GET['pAleatorias'])) {
              echo ' ';
          } else{
             
        for ($x=0; $x < $n; $x++) { 
          $y = rand(3,7);
          
    ?>
      
      <input type="text" name="NewName" value="<?php echo GerarNome($y,$z)?>">
      <br>    
        
<?php
   
          } // FOR

        } //ELSE 

        ?>
    </div>


</div> <!-- Div Principal -->

</body>




</html>