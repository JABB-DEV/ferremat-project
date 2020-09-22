<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
       $data['productos'] = Productos::all();
        return view('productos.index', $data);
    }

    public function create(Request $request)
    {
        return view('productos.new');
    }

    public function store(Request $request)
    {
        $productos = request()-> except('_token');
        $field = $productos['producto'];
        $datos['productos'] = Productos::where('nombre', 'LIKE', "%$field%")->get();
        return view('productos.index', $datos);
    }

    public function show(Productos $productos)
    {
    }

    public function edit($id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $productos = request()-> except(['_token', '_method']);
        Productos::where('id','=',$id)->update($productos);
        $producto = Productos::findOrFail($id);
        return redirect()->route('producto.index');
    }

    public function storeProducto(Request $request){
        $producto = request()->except('_token');
        Productos::insert($producto);
        return redirect()->route('producto.index');
    }

    public function destroy($id)
    {
        Productos::destroy($id);
        return redirect()->route('producto.index');
    }
}
