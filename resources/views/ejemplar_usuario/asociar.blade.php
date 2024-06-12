<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1>asociar</h1>
    <form action="{{route('ejemplar_usuario.store')}}" method="POST">
    @csrf
    <h1>Ejemplar</h1>
    <select name="ejemplar_id">
        
        @foreach ($ejemplares as $ejemplar)
        <option value="{{$ejemplar->id}}">{{$ejemplar->id}}-{{$ejemplar->libro_id}}</option>
            
        @endforeach
    </select>
    <br>
    <h1>Usuario</h1>
    <select name="usuario_id">
        @foreach ($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->id}}-{{$usuario->nombre}}</option>
            
        @endforeach
    </select>
    <br><br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>