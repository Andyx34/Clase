<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4 class="heading">Editar Informacion Foro</h4>
    <form action="{{route('libro.update', $libro)}}"  method="POST">
    
        @csrf
        @method('put')
        <label for="codigos"> Codigo</label>
        <br>
        <input name="codigos" type="text" class="input-field" value="{{old('codigos',$libro->codigos) }}">
        <br>
        <label for="titulo">Titulo</label>
        <br>
        <input name="titulo" type="text"   value="{{old('titulo',$libro->titulo)}}">
        <br>
        <label for="isbn">ISBN</label>
        <br>
        <input name="isbn" type="text"   value="{{old('isbn',$libro->isbn)}}">
        <br>
        <label for="editorial">Editorial</label>
        <br>
        <input name="editorial" type="text"   value="{{old('editorial',$libro->editorial)}}">
        <br>
        <label for="numero_paginas">Numero de Paginas</label>
        <br>
        <input name="numero_paginas" type="text"   value="{{old('numero_paginas',$libro->numero_paginas)}}">
        <br>
       
        <button  type="submit" class="btn-outline-add">Actualizar</button>
    </form>
</body>
</html>