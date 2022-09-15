<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="recebe.php" method="post">
        <label for = "nome">Nome:</label>
        <input type = "text" name= "nomeUsuario" id="nome">
        <label for = "idade"> Idade</label>
        <input type = "number" name = "idadeId" id="idade">
        <label for = "CPF"> CPF </label>
        <input for = "number" name = "cpfUsuario" id ="cpf"><br>
        <select name = "PeriodoUsuario" id = "Periodo">
        <option value = ""> Escolha</option>
        <option value = "Matutino"> Matutino</option> 
        <option value = "Vespertino"> Vespertino</option> 
        <option value = "Noturno"> Noturno</option> 
        <input type= "submit" value= "Enviar">
</form>
</head>
<body>
    
</body>
</html>