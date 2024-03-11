<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>alumnos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="p-3 text-center">Alumnos</h1>
        
    </header>
    <div class="table-responsive p-5">
        <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">A_p</th>
      <th scope="col">A_m</th>
      <th scope="col">edad</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datos as $item)
     <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->Nombre}}</td>
      <td>{{$item->A_p}}</td>
      <td>{{$item->A_m}}</td>
      <td>{{$item->edad}}</td>
    </tr>
        
    @endforeach
    
  </tbody>
</table>
    </div>
</body>
</html>