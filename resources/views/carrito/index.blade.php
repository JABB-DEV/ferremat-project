@extends('layouts.main')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-center">Formulario de venta</div>
                <div class="card-body">
                    <form action="{{ url('carrito') }}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{ $producto->id }}">
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion: </label>
                            <textarea class="form-control" readonly>{{$producto->descripcion}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="existencia">Existencia: </label>
                            <textarea id="existencia" name="existencia" class="form-control" readonly>{{$producto->existencia}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio: </label>
                            <textarea name="precio" id="precio" class="form-control" readonly>{{$producto->precio}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad a comprar: </label>
                            <input type="number" name="cantidad" id="cantidad" min="1" max="{{$producto->existencia}}" value="1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subtotal">Subtotal: </label>
                            <input type="number" name="subtotal" id="subtotal" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="total">Total: </label>
                            <input type="number" name="total" id="total" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" class="form-control btn-success" value="Comprar">
                            <a class="btn btn-default btn-block mt-1" href="{{ url('producto/') }}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(() => {

        $('#subtotal').val($('#precio').val() * $('#cantidad').val())
        $('#total').val($('#precio').val() * $('#cantidad').val())
        $('#cantidad').on('change keyup', () => {
            let precio = $('#precio').val()
            let cantidad = $('#cantidad').val()
            let existencia = $('#existencia').val()
                $('#total').val(precio * cantidad);
        })
    })
</script>
@endsection