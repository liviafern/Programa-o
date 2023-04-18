<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>


<?php
        include_once("header.php");
    ?>
    
    <main>
        <form action="receber.php" method="get" class="dados__content">

            <label for="">
                Nome:
                <input type="text" name="nome" value=<?php echo $_GET["nome"] ?>>      
            </label>

            <label for="">
                Endereço:
                <input type="text" name="endereco" value=<?php echo $_GET["endereco"] ?>>      
            </label>

            <label for="">
                Telefone:
                <input type="text" name="telefone" value=<?php echo $_GET["telefone"] ?>>      
            </label>

            <label for="">
                Cpf:
                <input type="text" name="nome" value=<?php echo $_GET["cpf"] ?>>      
            </label>

            <label for="">
                Email:
                <input type="text" name="email" value=<?php echo $_GET["email"] ?>>      
            </label>

            <label for="radio_content">
                Turma:
                <input type="text" name="turma" value=<?php echo $_GET["turma"] ?>>      
            </label>

            <label for="botao">
                <input type="submit" value="Concluido" class="btn">
            </label>


      
</form> 
<main>

            <?php 
            include_once ("footer.php");
            ?>


</body>
</html>

