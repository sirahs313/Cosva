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

.card_title{
    text-align: center;
}
.pendientes-VKp {
  text-decoration: none;
  width: 12.6rem;
  height: 3rem;
  position: absolute;
  left: 86.3rem;
  top: 27rem;
  font-size: 2.4rem;
  font-weight: 300;
  line-height: 1.2125;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
  white-space: nowrap;
}
.rechazadas-3Er {
  text-decoration: none;
  width: 13.7rem;
  height: 3rem;
  position: absolute;
  left: 54.4rem;
  top: 27.2rem;
  font-size: 2.4rem;
  font-weight: 300;
  line-height: 1.2125;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
  white-space: nowrap;
}
.navlink-vZY {
  text-decoration: none;
  width: 10.9rem;
  height: 4.9rem;
  cursor: pointer;
  position: absolute;
  left: 114.3rem;
  top: 26.2rem;
  font-size: 2.4rem;
  font-weight: 300;
  line-height: 1.2125;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
  white-space: nowrap;
  display: flex;
  align-items: center;
  justify-content: center;
}
.solicitudes-PRC {
    text-decoration: none;
  width: 12.3rem;
  height: 3rem;
  position: absolute;
  left: 26rem;
  top: 27rem;
  font-size: 2.4rem;
  font-weight: 300;
  line-height: 1.2125;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
  white-space: nowrap;
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
   
    <a href="solicitudes" class="solicitudes-PRC">Solicitudes</a>
   
    <a href="desktop-7" class="navlink-vZY">Salir</a>
    <div class="group-1-dBY">
      <img class="person-digging-solid-1-Kq4" src="images/person-digging-solid-1-mGW.png"/>
      <p class="cosva-TRU">
        <span class="cosva-TRU-sub-0">COS</span>
        <span class="cosva-TRU-sub-1">VA</span>
      </p>
    </div>
    <p class="solicitud-oQn">
        <span class="solicitud-oQn-sub-0">RECHA</span>
        <span class="solicitud-oQn-sub-1">ZADAS</span>
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
                                            
                                            <th>motivo</th>
                                            <th>usuario_id</th>
                                            
    
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rechazadas as $rechazada)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $rechazada->motivo }}</td>
                                                <td>{{ $rechazada->usuario_id }}</td>
                                                
    
                                                <td>
                                                    
                                                    
                                                        
                                                    </form>
                                                    
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $rechazadas->links() !!}
                </div>
            </div>
        </div>
    </div>
  
@endsection
