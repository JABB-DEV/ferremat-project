<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PDF</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    <p class="h1 text-center">Productos</p>
    <div class="container table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        Nombre
                    </th>
                    <th scope="col">
                        Precio
                    </th>
                    <th scope="col">
                        Cantidad
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>
                        {{ $producto->nombre }}
                    </td>
                    <td>
                        {{ $producto->precio }}
                    </td>
                    <td>
                        {{ $producto->cantidad }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- <div class="row d-block">
        <p class="justify-content-right">Subtotal: {{ $producto->subtotal }} </p>
    </div>

    <div class="row d-block">
        <div class="float-md-right">Total: {{ $producto->total }}</div>
    </div> -->
    <div style="position:relative;">
        <div style="position:absolute;right:0;">Subtotal: <span>{{ $producto->subtotal }}</span></div>
    </div>
    <div style="position:relative;top:15;">
        <div style="position:absolute;right:0;">Total: <span>{{ $producto->total }}</span></div>
    </div>
</body>

</html>