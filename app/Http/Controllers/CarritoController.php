<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Productos;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        $datos['productos'] = Carrito::all();
        // return $datos;
        $pdf = \PDF::loadView('carrito.pdf', $datos);
        return $pdf->stream();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $idProducto =  request('id');
        $existencia =  request('existencia');

        $ventas = request()->except(['_token', 'id', 'existencia']);

        //insertar y rescatar la ultima venta hecha
        Carrito::insert($ventas);
        $Carrito['productos'] = Carrito::latest('id')->first();

        //Actualizar existencias del producto
        $producto = Productos::where('id', '=', $idProducto)->first();
        $producto->existencia = $existencia - $ventas['cantidad'];
        $producto->save();
        
        $pdf = \PDF::loadView('carrito.reporte-ventas', $Carrito);
        return $pdf->stream();
    }

    public function show($id)
    {
        $datos['producto'] = Productos::findOrFail($id);
        // return $producto;
        return view('carrito.index', $datos);
    }

    public function edit($id)
    {
        return $id;
    }

    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    public function destroy(Carrito $carrito)
    {
        //
    }
}
