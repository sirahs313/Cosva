@extends('layouts.app')

@section('template_title')
    Equipo
@endsection

@section('content')
@extends ('padre')

@section('contenido')
<style>
    .custom-card {
    width: 1000px; /* Ajusta el ancho según sea necesario */
    height: 60; /* Ajusta la altura según sea necesario */
    text-align: center;
    margin-top: -20px;
}

.custom-card-header {
    font-size: 25px;
    text-align: center; /* Ajusta el tamaño del texto según sea necesario */
}
.custom-card-body {
   
    font-size: 15px;
    text-align: center;
}
/* public/css/index.css */

.alert-success {
    font-size: 20px;
    text-align: center; /* Ajusta el tamaño según sea necesario */
}
.solicitud-oQn{
    margin-left: -120px;
}


</style>
<body>
<div class="desktop-11-afC">
  <div class="desktop-3-vyx">
    <div class="rectangle-9-dNa">
    </div>
    <div class="rectangle-1-YVY">
    </div>
    <div class="rectangle-10-5Ea">
    </div>
    <div class="rectangle-2-QGr">
    </div>
    <a href="desktop-12"class="navlink-MC6">Equipos</a>
   
    <a href="desktop-1" class="navlink-PHC">Salir</a>
    <div class="group-1-dBY">
      <img class="person-digging-solid-1-Kq4" src="images/person-digging-solid-1-mGW.png"/>
      <p class="cosva-TRU">
        <span class="cosva-TRU-sub-0">COS</span>
        <span class="cosva-TRU-sub-1">VA</span>
      </p>
    </div>
    <p class="solicitud-oQn">
        <span class="solicitud-oQn-sub-0">MAQUINARIA</span>
        <span class="solicitud-oQn-sub-1">PERFORACION</span>
      </p>
    <div class="rectangle-11-zTL">
        <div class="container-flex">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header custom-card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
      
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
    
                        <div class="card-body custom-card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>ID</th>
                                            
                                            <th>Nombre Equipo</th>
                                            <th>Categoria Id</th>
                                            <th>Cantidad</th>
    
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($equipos2 as $equipo)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $equipo->nombre }}</td>
                                                <td>{{ $equipo->categoria_id }}</td>
                                                <td>{{ $equipo->cantidad }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $equipos2->links() !!}
                </div>
            </div>
        </div>
    </div>
  
@endsection
