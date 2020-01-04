<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Novo Contato</h1>

<form method="post">
@csrf
<input class="form-control"type="text" name="nome" >
<input class="form-control" type="text" name="telefone" >
<button type="submit" class= "btn btn-success">Cadastrar</button>

</form>

</body>
</html>