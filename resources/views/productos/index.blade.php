@extends('layouts.main')

@section('contenido')
<p class="h1 text-center">Productos <a href="{{ url('/producto/create') }}" data-toggle="tooltip" title="Agregar un nuevo producto"><i class="fas fa-plus-circle"></i></a></p>
<div class="container table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Existencia</th>
        <th scope="col">Precio</th>
        <th scope="col">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($productos as $producto)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>
          {{ $producto->existencia }}
        </td>
        <td>
          {{ $producto->precio }}
        </td>
        <td>
          @if($producto->existencia >= 1)
          <a href="{{ url('/carrito/'.$producto->id.'') }}" class="btn btn-outline-warning" data-toggle="tooltip" title="Comprar producto {{$producto->nombre}}">Comprar <i class="fas fa-shopping-cart"></i></a>
          <a href="{{ url('/producto/'.$producto->id.'/edit') }}" class="btn btn-outline-info" data-toggle="tooltip" title="Editar producto">Editar <i class="fas fa-edit"></i></a>
          <form action="{{ url('/producto/'.$producto->id) }}" method="POST" class="form-inline my-2 my-lg-0">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-outline-danger mt-1" data-toggle="tooltip" title="Eliminar producto">Eliminar <i class="fas fa-edit"></i></button>
          </form>
          @else
          <i>Sin stock <a href="{{ url('/producto/'.$producto->id.'/edit') }} " data-toggle="tooltip" title="Agregar mas productos al stock">Agregar más</a> o </i>
          @endif
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="3" class="text-center text-danger">El producto no existe</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection