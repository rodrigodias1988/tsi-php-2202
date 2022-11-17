<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class = 'container'>
    <form action = "atualizar.php" method = "post">
        <label for="nome">Nome: </label>
        <input type ="text" name = "nome" value= "<?php echo $aluno ['nome'];?>">
        <br><br>    
        <label for = "turno"> Turno: </label>
        <select name = "turno" id="turno">
            <option value = ""> Escolha</opcion>
            <option value = "matutino" 
            <?php echo $aluno['turno'] == 'matutino' ? 'selected' : '';?>> Matutino</opcion>
            <option value = "vespertino" 
            <?php echo $aluno['turno'] == 'vespertino' ? 'selected' : '';?>> Vespertino</opcion>
            <option value = "noturno" 

            <?php echo $aluno['turno'] == 'noturno' ? 'selected' : '';?>> Noturno</opcion>

        </select>
        <br><br>
        <label for = "inicio"> Inicio</label>
        <input type ="date" name = "inicio" id = "inicio" value= "<?php echo $aluno ['inicio'];?>">
        <br><br>
        <input type= hidden name ="id" value= "<?php echo $aluno ['id'];?>">
        <input class= "btn"type= "submit" value = "Atualizar">
    </form>
    </div>
</body>
</html>