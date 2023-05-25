<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá maria </title>
</head>
<body>
    Digite
     <h1>Controle de tarefas</h1>

    <form>
        Nome
       <div class="row">
        <div class="col-6 mx-auto">
        <input name ="Nome" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">>
        </div>
        </div>

        <button type="submit" class="btn btn-outline-info">Salvar tudo</button>
    </form>

    <br><br>

    <?php
    if(isset($_GET["Nome"])){
        $nome = $_GET["Nome"];

    }
    else{
        $nome="";
    }
    
echo "Olá $nome"

    ?>

</body>
</body>
</html>