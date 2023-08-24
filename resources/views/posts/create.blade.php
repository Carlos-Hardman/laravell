<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.store')}}" method='POST'>
    @csrf
    <label>Titulo</label><br>
    <input type="text" name='title'><br>
    <label>Conteudo</label><br>
    <input type='text' name='content'><br>
    <button value='click'>Crie me</button>

</form>
    
</body>
</html>