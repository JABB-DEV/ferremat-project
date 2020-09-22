@extends('layouts.main')

@section('contenido')
<div class="row">
    <div class="col-md-4 mt-3">
        <a href="#" class="imagen-box"><img src="{{asset('img/caballo2.jpg')}}" width="100%" height="100%" alt="..."><p>Alimentacion de caballos</p></a>
    </div>
    <div class="col-md-4 mt-3">
        <a href="#" class="imagen-box"><img src="{{asset('img/gallina1.jpg')}}" width="100%" height="100%" alt="..."><p>Aves de corral</p></a>
    </div>
    <div class="col-md-4 mt-3">
        <a href="#" class="imagen-box"><img src="{{asset('img/vaca1.jpg')}}" width="100%" height="100%" alt="..."><p>Texto de la imagen</p></a>
    </div>
</div>

@endsection