<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

    <div class="container">
        <?php
    
            if(isset($_SESSION['password'])){
                $pass = $_SESSION['password'];
            }
        
        ?>
        <div> <h3>Gerador de Senhas</h3> </div>
        <form action="gerador_senha.php" method="POST">

            <label for="">Quantidade de caracteres</label>
            <input type="text" name="qtdcaracter"> 
            
            <fieldset>
                <div>
                   <label for="">Maiusculas</label>
                     <input type="checkbox" name="maiuscula" id="idMaiuscula">
                </div>
                <div>
                     <label for="">Minusculos</label>
                     <input type="checkbox" name="minuscula" id="idminuscula">
                </div>
                <div>
                     <label for="">Numeros</label>
                     <input type="checkbox" name="numero" id="idNumero">
                </div>
                <div>
                     <label for="">Simbolos</label>
                     <input type="checkbox" name="simbolo" id="idSimbolo">
                </div>
            </fieldset> 
        
            <h4> <?php echo isset($_SESSION["password"]) ? $_SESSION['password'] : "..." ?></h4>
            <input type="submit" >
        </form>
    </div>
    
</body>
</html>