<?php

    include_once ("header.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="global.css">
        <title>Document</title>
      
</head>
<body>
    
    
    <main> 
        <form class= "dados_content" action= "receber.php" method= "get">
        
        <label for="">
                Nome:
                <input type="text" name="nome">
            </label>

            <label for="">
                Endereço:
                <input type="text" name="endereco">
            </label>

            <label for="">
                Telefone:
                <input type="text" name="telefone">
            </label>

            <label for="">
                Cpf:
                <input type="password" name="cpf">
            </label>

            <label for="">
                Nome da aluno(a):
                <input type="text" name="email">
            </label>

           <label for="">
                Senha:
                <input type="password" name="senha">
            </label>

            <label for="" class="radio__content" >
                Turma:
                
                <label for="" class="radio__content">
                    <input type="radio" class="radio" name="turma" checked value="Baby Class"> 
                    Baby Class  
                </label>

                <label for="" class="radio__content">
                    <input type="radio" class="radio" name="turma" value="Pre Ballet">
                    Pré Ballet 
                </label>
            </label>

            <label for="">
                <input type="submit" class="btn">
              
            </label>
        </form>
    </main>

   
</body>
</html>

<?php
        include_once("footer.php");
    ?>