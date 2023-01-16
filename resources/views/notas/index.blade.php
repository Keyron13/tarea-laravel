<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Todas las notas</h1>
        <a href="{{url('/notas/crear')}}" class="btn btn-primary">ingresar notas</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">nota 1</th>
                <th scope="col">nota 2</th>
                <th scope="col">nota 3</th>
                <th scope="col">promedio</th>
                <th scope="col">acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($notas as $item)
                    <tr>
                        <th scope="row"> {{$item->id}} </th>
                        <td>{{$item->nota1}}</td>
                        <td>{{$item->nota2}}</td>
                        <td>{{$item->nota3}}</td>
                        <td>{{$item->promedio}}</td>
                        <td>
                            <a href="{{url('/notas/'.$item->id)}}" class="btn btn-info">editar</a>
                            <form action="
                            {{url('/notas/'.$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button  type='submit' class="btn btn-danger">eliminar</button></form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>