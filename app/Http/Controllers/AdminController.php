<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Productos;

class AdminController extends Controller
{
    

    public function añadir_producto(Request $request)
    {
      $data = new Productos;
      $data->nombreproducto = $request->nombreproducto;
      $image = $request->image;
      if($image)
      {

        $imagenombre = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productos',$imagenombre);
        $data->image = $imagenombre;
      }
      $data->precio = $request->precio;
      $data->cantidad = $request->cantidad;
      $data->save();
      return redirect()->back();
    }
      public function view_productos()
    {
        $producto = Productos::all();
        return view('admin.productos',compact('producto'));
    }

}

