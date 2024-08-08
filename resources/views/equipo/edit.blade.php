@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Equipo
@endsection

@section('content')
<style>
    
html {
	font-size:62.5%;
}
* {
	margin: 0;
	padding: 0;
}
ul, li {
	list-style: none;
}
input {
	border: none;
}
body {
  width: 144rem;
}.desktop-11-afC {
  width: 100%;
  height: 102.4rem;
  overflow: hidden;
  position: relative;
  background-color: #ffffff;
}
.desktop-11-afC .desktop-3-vyx {
  width: 144.8rem;
  height: 100%;
  position: relative;
  overflow: hidden;
  background: linear-gradient(180deg, rgba(255, 255, 255, 0.9200000167) -0%, #9fa5b0 100%);
}
.desktop-11-afC .desktop-3-vyx .rectangle-9-dNa {
  width: 130rem;
  height: 94rem;
  position: absolute;
  left: 7rem;
  top: 4.2rem;
  background: linear-gradient(180deg, #1a1b1f -0%, #142960 100%);
}
.desktop-11-afC .desktop-3-vyx .rectangle-1-YVY {
  width: 130rem;
  height: 94rem;
  position: absolute;
  left: 7rem;
  top: 4.2rem;
  background: linear-gradient(180deg, #1a1b1f -0%, #142960 100%);
}
.desktop-11-afC .desktop-3-vyx .rectangle-10-5Ea {
  width: 130rem;
  height: 94rem;
  position: absolute;
  left: 7rem;
  top: 4.2rem;
  background: linear-gradient(180deg, #1a1b1f -0%, #142960 100%);
}
.desktop-11-afC .desktop-3-vyx .rectangle-2-QGr {
  width: 130rem;
  height: 12.4rem;
  position: absolute;
  left: 7rem;
  top: 22.3rem;
  box-sizing: border-box;
}
.desktop-11-afC .desktop-3-vyx .navlink-MC6 {
  text-decoration: none;
  width: 12rem;
  height: 6.1rem;
  cursor: pointer;
  position: absolute;
  left: 16.9rem;
  top: 25.4rem;
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
.desktop-11-afC .desktop-3-vyx .navlink-HV4 {
  text-decoration: none;
  width: 12.3rem;
  height: 6.1rem;
  cursor: pointer;
  position: absolute;
  left: 64.85rem;
  top: 25.6rem;
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
.desktop-11-afC .desktop-3-vyx .navlink-PHC {
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
.desktop-11-afC .desktop-3-vyx .group-1-dBY {
  box-sizing: border-box;
  padding: 1.4rem 0rem 1.4rem 8.5rem;
  width: 51.1rem;
  height: 14.6rem;
  position: absolute;
  left: 44.7rem;
  top: 6rem;
  display: flex;
  align-items: center;
}
.desktop-11-afC .desktop-3-vyx .group-1-dBY .person-digging-solid-1-Kq4 {
  margin-right: 0.9234rem;
  width: 8.9766rem;
  height: 11.8rem;
  object-fit: contain;
  vertical-align: top;
  flex-shrink: 0;
}
.desktop-11-afC .desktop-3-vyx .group-1-dBY .cosva-TRU {
  margin-top: 0.1rem;
  font-size: 9.6rem;
  font-weight: 800;
  line-height: 1.2102272511;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
  white-space: nowrap;
  display: flex;
  align-items: baseline;
  flex-shrink: 0;
}
.desktop-11-afC .desktop-3-vyx .group-1-dBY .cosva-TRU .cosva-TRU-sub-0 {
  font-size: 9.6rem;
  font-weight: 300;
  line-height: 1.2125;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
}
.desktop-11-afC .desktop-3-vyx .group-1-dBY .cosva-TRU .cosva-TRU-sub-1 {
  font-size: 9.6rem;
  font-weight: 800;
  line-height: 1.2125;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
}
.desktop-11-afC .desktop-3-vyx .rectangle-11-zTL {
  width: 120.8rem;
  height: 48.4rem;
  position: absolute;
  left: 11.6rem;
  top: 43.9rem;
  background: linear-gradient(180deg, #ffffff -0%, #9fa5b0 100%);
  border-radius: 5.2rem;
}
.desktop-11-afC .desktop-3-vyx .solicitud-oQn {
  width: 21.7rem;
  height: 4.9rem;
  position: absolute;
  left: 60.2rem;
  top: 37rem;
  font-size: 4rem;
  font-weight: 300;
  line-height: 1.2102272034;
  color: #ffffff;
  font-family: Inter, 'Source Sans Pro';
  white-space: nowrap;
  display: flex;
  align-items: baseline;
}
.desktop-11-afC .desktop-3-vyx .solicitud-oQn .solicitud-oQn-sub-0 {
  font-size: 4rem;
  font-weight: 300;
  line-height: 1.2125;
  color: #d9d9d9;
  font-family: Inter, 'Source Sans Pro';
}
.desktop-11-afC .desktop-3-vyx .solicitud-oQn .solicitud-oQn-sub-1 {
  font-size: 4rem;
  font-weight: 800;
  line-height: 1.2125;
  color: #f5bf79;
  font-family: Inter, 'Source Sans Pro';
}
.desktop-11-afC .desktop-3-vyx .solicitud-para-renta-de-maquinaria-pesada-oSi {
  width: 50.5rem;
  height: 3rem;
  position: absolute;
  left: 48.2rem;
  top: 51.2rem;
  font-size: 2.4rem;
  font-weight: 800;
  line-height: 1.2125;
  color: #000000;
  font-family: Inter, 'Source Sans Pro';
  white-space: nowrap;
}
.desktop-11-afC .desktop-3-vyx .item--h2J {
  width: 111.5rem;
  height: 26.2rem;
  position: absolute;
  left: 15.8rem;
  top: 58.5rem;
  font-size: 1.2rem;
  font-weight: 800;
  line-height: 1.2125;
  color: #000000;
  font-family: Inter, 'Source Sans Pro';
}
.desktop-11-afC .desktop-3-vyx .rectangle-17-SQS {
  width: 9.5rem;
  height: 2.9rem;
  position: absolute;
  left: 56.2rem;
  top: 87.4rem;
  background-color: #4ed30f;
  border-radius: 1rem;
}
.desktop-11-afC .desktop-3-vyx .rectangle-20-YTU {
  width: 9.5rem;
  height: 2.9rem;
  position: absolute;
  left: 74.9rem;
  top: 87rem;
  background-color: #ff6079;
  border-radius: 1rem;
}
.desktop-11-afC .desktop-3-vyx .visualizar-4Rp {
  width: 6.1rem;
  height: 1.3rem;
  position: absolute;
  left: 116.6rem;
  top: 47rem;
  display: flex;
  font-size: 1rem;
  font-weight: 700;
  line-height: 1.255;
  color: #ffffff;
  font-family: Mulish, 'Source Sans Pro';
  white-space: nowrap;
}
.desktop-11-afC .desktop-3-vyx .rechazar-Aze {
  width: 5.6rem;
  height: 1.3rem;
  position: absolute;
  left: 76.9rem;
  top: 87.8rem;
  display: flex;
  font-size: 1rem;
  font-weight: 700;
  line-height: 1.255;
  color: #ffffff;
  font-family: Mulish, 'Source Sans Pro';
  white-space: nowrap;
}
.desktop-11-afC .desktop-3-vyx .aceptar-J5G {
  width: 4.7rem;
  height: 1.3rem;
  position: absolute;
  left: 58.6rem;
  top: 88.2rem;
  display: flex;
  font-size: 1rem;
  font-weight: 700;
  line-height: 1.255;
  color: #ffffff;
  font-family: Mulish, 'Source Sans Pro';
  white-space: nowrap;
}
.desktop-11-afC .desktop-3-vyx .perfil-del-usuario-2-pJW {
  width: 11.3rem;
  height: 9.3rem;
  position: absolute;
  left: 19.2rem;
  top: 48.3rem;
  object-fit: cover;
  vertical-align: top;
}
.custom-card {
    width: 1000px; /* Ajusta el ancho según sea necesario */
    height: 60; /* Ajusta la altura según sea necesario */
    text-align: center;
     margin-top: -20px;
}

.custom-card-header {
    font-size: 34px; /* Ajusta el tamaño del texto según sea necesario */
}
.custom-card-body {
    padding: 20px; /* Ajusta el relleno según sea necesario */
    font-size: 20px;
    text-align: center;
}
.person-digging-solid-1-Kq4 {
  margin-right: 0.9234rem;
  width: 8.9766rem;
  height: 11.8rem;
  object-fit: contain;
  vertical-align: top;
  flex-shrink: 0;
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
        
        <div class="group-1-dBY">
          
          <p class="cosva-TRU">
            <span class="cosva-TRU-sub-0">COS</span>
            <span class="cosva-TRU-sub-1">VA</span>
          </p>
        </div>
        <p class="solicitud-oQn">
            <span class="solicitud-oQn-sub-0">REGIS</span>
            <span class="solicitud-oQn-sub-1">TROS</span>
          </p>
        <div class="rectangle-11-zTL">
    <section class="content container-flex">
        <div class="row justify-content-center">
            <div class="col-md-12" style="max-width: 1000px;  margin:  100px auto;">
                @includeif('partials.errors')

                <div class="card card-default custom-card">
                    <div class="card-header custom-card-header">
                        <span class="card-title">{{ __('Editar') }} Equipo</span>
                    </div>
                    <div class="card-body custom-card-body">
                        <form method="POST" action="{{ route('equipos.update', $equipo->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                
                            @include('equipo.form')
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>
@endsection
