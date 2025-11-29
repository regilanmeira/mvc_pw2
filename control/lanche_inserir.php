<link rel="stylesheet" href="../css/estilo.css">
<?php

include "../model/lanche.php";
include "../model/petisco.php";

$nome = $_POST["txtNome"];
$ingredientes = $_POST["txtIngredientes"];
$preco = $_POST["txtPreco"];

$lanche = new Lanche($nome,$ingredientes,$preco);


$retorno = $lanche->cadastrar();


if ($retorno == true)
    {
        echo "<h1>Cadastrado o(a) " . $lanche->getNome() . "</h1>";
    } 

else{
    echo "<h1>Não foi cadastrado!</h1>";
}


//CHAMADA DE FUNÇÃO STATIC
echo  Lanche::informar();

//CRIAÇÃO DE OBJETO COM CLASSE DE HERANÇA
$petisco = new Petisco("Batata Frita","Batata e molho rosé","R$ 35");

echo $petisco->avisar();



