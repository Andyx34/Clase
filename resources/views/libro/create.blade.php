<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="heading">~Libro~</h1>
    <form action="{{route('libro.store')}}" method="POST">
        @csrf
        <label for="codigos">Codigo:  </label>
        <input  type='text' name="codigos" class="form-control" id="codigos">
        <br>
        <br>
        <label for="titulo"> Titulo: </label>
        <input  type='text' name="titulo" class="form-control" id="titulo">
        <br>
        <br>
        <label for="isbn"> ISBN: </label>
        <input  type='text' name="isbn" class="form-control" id="isbn">
        <br>
        <br>
        <label for="editorial"> Editorial: </label>
        <input  type='text' name="editorial" class="form-control" id="editorial">
        <br>
        <br>
        <label for="numero_paginas"> Numero de Paginas: </label>
        <input  type='text' name="numero_paginas" class="form-control" id="numero_paginas">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>