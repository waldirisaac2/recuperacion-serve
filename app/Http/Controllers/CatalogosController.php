<?php

namespace App\Http\Controllers;

use App\catalogos;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    public function create(Request $request) 
    {
       catalogosmodel::create($request-> all());
        return response()->json(['success'=> true]);
    }
    public function show($id)
    {
        $formaciones= catalosgomodel::find($id);
        return response()->json($formaciones);
    }
    public function update(Request $request, $id)
    {
        catalosgomodel::findOrFail($id)->update($request->all());
        return response()->json($request->all());
    }
    public function destroy($id)
    {
        catalogosmodel::findOrFail($id)->delete();
    }
}
