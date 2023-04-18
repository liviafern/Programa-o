<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Receber</title>
</head>
<body>
   
<?php

            include_once ("header.php");
?>

    <main> 
        <form action = "editar.php" method= "get" class= "dados_content">

            <Label for= "">
        Nome: 
            <?php 
        $nome = $_GET ["nome"];
        echo $nome;
            ?>
            <label>

            <label for= "">
        Endereço:
            <?php 
        $endereco = $_GET ["endereco"];
        echo $endereco;
             ?>
             <label>
        
            <label for= "">
        Telefone:
            <?php
        $telefone = $_GET ["telefone"];
        echo $telefone;
            ?>
            <label>

            <label for= "">
        Cpf:
            <?php
        $cpf = $_GET ["cpf"];
        echo $cpf;
            ?>
            <label>

            <label for= "">
        Email:
            <?php
        $email = $_GET ["email"];
        echo $email;
            ?>
            <label>

            <label for= "">
        Senha:
            <?php
        $senha = $_GET ["senha"];
        echo $senha;
            ?>
            <label>

            <label for= "">
        Sexo:
            <?php
        $turma = $_GET ["turma"];
        echo $turma;
            ?>
            <label>

        
            <input type="hidden" name="nome" value=<?php echo $nome ?>>
            <input type="hidden" name="email" value=<?php echo $email ?>>
            <input type="hidden" name="senha" value=<?php echo $senha ?>>
            <input type="hidden" name="telefone" value=<?php echo $telefone ?>>
            <input type="hidden" name="cpf" value=<?php echo $cpf ?>>
            <input type="hidden" name="endereco" value=<?php echo $endereco ?>>
            <input type="hidden" name="turma" value=<?php echo $turma ?>>

            <label for="">
                <input type="submit" value="EDITAR" class="btn">
            </label>

        </form>
    </main>

    <?php
        include_once("footer.php");
    ?>
          

    
</body>
</html>