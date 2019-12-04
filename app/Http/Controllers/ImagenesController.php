<?php

namespace App\Http\Controllers;

use App\imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function index()
    {
        $CrearCatalogos = imagenes::all();
        return response()->json($CrearCatalogos);
    }
    public function create(Request $request) 
    {
       imagenes::create($request-> all());
        return response()->json(['success'=> true]);
    }
    public function show($id)
    {
        $formaciones= imagenes::find($id);
        return response()->json($formaciones);
    }
    public function show2($id)
    {
        $imagenes = imagenes::join('catalogos','catalogosid','catalogos.id')->where("catalogos.id","=",$id)
        ->select('imagenes.id','imagenes.titulo','imagenes.detalles','imagenes.url_imagen',
        'imagenes.id_youtube','imagenes.url_audio','imagenes.principal','imagenes.catalogosid')
        ->get();
        return response()->json($imagenes);
    }
    public function update(Request $request, $id)
    {
        imagenes::findOrFail($id)->update($request->all());
        return response()->json($request->all());
    }
    public function destroy($id)
    {
        imagenes::findOrFail($id)->delete();
    }
}
