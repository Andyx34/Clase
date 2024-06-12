<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <h2 class="heading">Informacion</h2>
    <table class="styles">
        <thead>
        <tr>
        <th>Id</th>
        <th>Codigo</td>
        <th>Titulo</th>
        <th>Isbn</th>
        <th>Editorial</th>
        <th>Numero de Paginas</th>
        <th>Ver mas</th>
        <th>Eliminar</th>
    </tr>
        </thead>
        <tbody>
        @foreach ($libro as $libro)
        <tr>
            <td>{{$libro->id}}</td>
            <td>{{$libro->codigos}}</td>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->isbn}}</td>
            <td>{{$libro->editorial}}</td>
            <td>{{$libro->numero_paginas}}</td>
            <td>
                <a href="{{route('libro.show',$libro->id)}}" class="btn-outline-info">Ver mas..</a>
            </td>

            <td>
                <form action="{{route('libro.destroy',$libro->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
</table>