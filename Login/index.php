<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>

    <div class="container">
    <div class = "row">

    <?php
            if( isset($autentico) ){
                if( !$autentico){
                    echo '  <div class="alert alert-danger" role="alert">
                                Credenciais inválidas!
                            </div>';
                }
            }
            ?>
        </div>
        <div class ="row">
            <form action="autenticacao.php" method="post">
                Email : 
                <input name="usuario" type="text" autocomplete="off">
                <br>

                Senha:
                <input name="senha" type="password" autocomplete="off">
                <br>
                <input name="enviar" type="submit" value="Logar">
            </form> 
        </div>
    </div>
</body>
</html>