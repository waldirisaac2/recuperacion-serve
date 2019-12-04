<?php

namespace App\Http\Controllers;

use App\catalogos;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    public function index()
    {
        $CrearCatalogos = catalogos::all();
        return response()->json($CrearCatalogos);
    }
    public function create(Request $request) 
    {
       catalogos::create($request-> all());
        return response()->json(['success'=> true]);
    }
    public function show($id)
    {
        $formaciones= catalogos::find($id);
        return response()->json($formaciones);
    }
    public function update(Request $request, $id)
    {
        catalos::findOrFail($id)->update($request->all());
        return response()->json($request->all());
    }
    public function destroy($id)
    {
        catalogos::findOrFail($id)->delete();
    }
}

