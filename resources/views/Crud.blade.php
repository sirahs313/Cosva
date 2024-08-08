<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD ADMINISTRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">Almacen</h1>
    <div class="container-fluid row">
    <form class="col-4 p-3">
        <h3 class="text-center text-secondary">Registro de Maquinaria</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categoria-Id</label>
    <input type="text" class="form-control" id="nombre" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="nombre" >
  </div>

 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
   <div class="col-8">
   <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categori-Id</th>
      <th scope="col">Cantidad</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-froup-divider">
    
    @if(isset($datos) && count($datos) > 0)
    @foreach ($equipos as $item)
        <tr>
         
            <th>{{$item->id}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->categoria_id}}</td>
            <td>{{$item->cantidad}}</td>
        </tr>
    @endforeach
    @endif

</tbody>
</table>
    <td>
        
    <button type="button" class="btn btn-small btn-warning">
    <img src="images/trash-solid.svg" alt="eliminar">
    </button>
    <button type="button" class="btn btn-small btn-danger">
    <img src="images/pen-to-square-solid.svg" alt="editar">
    </button>
        
    </td>


   </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>