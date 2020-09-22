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
                <tr>
                    <td>
                        {{ $productos->nombre }}
                    </td>
                    <td>
                        {{ $productos->precio }}
                    </td>
                    <td>
                        {{ $productos->cantidad }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <div style="position:relative;">
        <div style="position:absolute;right:0;">Subtotal: <span>{{ $productos->subtotal }}</span></div>
    </div>
    <div style="position:relative;top:15;">
        <div style="position:absolute;right:0;">Total: <span>{{ $productos->total }}</span></div>
    </div>
</body>

</html>