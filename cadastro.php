<?php
include_once("conexao.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$disponivel  = $_POST["disponivel"];

$stmt = $conn->prepare("Insert INTO teste (nome, descricao, preco, disponibilidade) values (:nome, :descricao, :preco, :disponibilidade)");

$stmt-> bindParam(":nome", $nome);
$stmt-> bindParam(":descricao", $descricao);
$stmt-> bindParam(":preco", $preco);
$stmt-> bindParam(":disponibilidade", $disponivel);


if($stmt->execute()){
    $_SESSION["verficacao"] = true;
}
else{
    $_SESSION["verficacao"] = false;
}


$stmt = $conn->prepare("Select * from teste order by preco ASC");
$stmt ->execute();
$all = $stmt->fetchAll();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <?php if($_SESSION ["verificacao"] = true):?>
        <p>Cadastrado com sucesso!</p>
    <?php endif;?>
    <table>
        <tr>
            <th>Nome do Produto</th> 
            <th>Descrição</th>
            <th>Preço</th>
            <th>Disponível para venda?</th> 
        </tr>
       
            <?php foreach ($all as $all):?>
                <tr>
                <td><?=$all['nome']?></td>
                <td><?=$all['descricao']?></td>
                <td><?=$all['preco']?></td>
                <td><?=$all['disponibilidade']?></td>
                </tr>
            <?php endforeach;?>
    </table>
    <br>
    <br>
    <br>
    <br>
    <form action="teste.php">
        <input type="submit" value="Cadastrar mais produtos">
    </form>
</body>
</html>
