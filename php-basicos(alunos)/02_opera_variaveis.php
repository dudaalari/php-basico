<?php

//Montagem da URL

//http://localhost/php-basico/php-basicos(alunos)/2_opera_variaveis.php?numero1=10&numero2=5

// Varoáveis  que recebem valores pela URL (Método GET)
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];


// Verifica se os valores foram passados (isset)
//e converte para números inteiros
 if (isset($numero1) && ($numero2)) {
    $numero1 = (int)$numero1;
$numero2 = (int)$numero2;
 }

 // Calculos
 $soma = $numero1 +  $numero2;


 // Exibe
 echo "Soma: $soma <br>";


?>