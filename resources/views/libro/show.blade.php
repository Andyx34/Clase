<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4 class="heading">Detalles de la Informacion</h4>
    <table class="styles">
      <thead>
         <tr>
             <th>Id</th>
             <th>Titulo</th>
             <th>ISBN</th>
             <th>Editorial</th>
             <th>Numero de Paginas</th>
             <th>Editar</th>
         </tr>
      </thead>
      <tbody>
         @if (isset($libro))
             <tr>
            <td>{{$libro->id}}</td>
            <td>{{$libro->codigos}}</td>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->isbn}}</td>
            <td>{{$libro->editorial}}</td>
            <td>{{$libro->numero_paginas}}</td>
                 <td><a href="{{route('libro.edit',$libro->id)}}" class="btn-outline-info">Editar</a></td>
             </tr>
                 
             @else
                 
             @endif
      </tbody>
     </table>
</body>
</html>