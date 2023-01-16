<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="{{url('/notas')}}">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Ingresa nota 1 </label>
          <input type="number" name='nota1' class="form-control">
        </div>
        <div class="mb-3">
          <label  class="form-label">Ingresa nota 2 </label>
          <input type="number" name='nota2' class="form-control" >
        </div>
        <div class="mb-3">
          <label  class="form-label">Ingresa nota 3 </label>
          <input type="number" name='nota3' class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">crear</button>
      </form>
</body>
</html>