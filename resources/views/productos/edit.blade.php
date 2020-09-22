@extends('layouts.main')
@section('contenido')
<div class="row">
    <div class="col-md-6 container">
        <div class="card">
            <div class="card-header text-center">
                <p class="h1">Editar Producto</p>
            </div>
            <div class="card-body">
                <form action="{{url('/producto/'. $producto->id.'')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto" value="{{ $producto->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripcion del producto">{{ $producto->descripcion }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cantitad">Existencia</label>
                        <input type="number" class="form-control" id="cantidad" name="existencia" placeholder="Ingrese el stock del producto" min="0" value="{{ $producto->existencia }}">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto" min="0" value="{{ $producto->precio }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Guardar</button><a href="{{ url('/producto/') }}"  class="btn btn-default btn-block">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection