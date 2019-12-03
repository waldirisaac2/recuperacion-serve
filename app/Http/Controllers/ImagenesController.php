<?php

namespace App\Http\Controllers;

use App\imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function create(Request $request) 
    {
       imagenesmodel::create($request-> all());
        return response()->json(['success'=> true]);
    }
    public function show($id)
    {
        $formaciones= imagenesmodel::find($id);
        return response()->json($formaciones);
    }
    public function update(Request $request, $id)
    {
        imagenesmodel::findOrFail($id)->update($request->all());
        return response()->json($request->all());
    }
    public function destroy($id)
    {
        imagenesmodel::findOrFail($id)->delete();
    }
}
