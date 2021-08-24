<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    function show(){
        $categorieList = Categorie::all();
        return view('categorie/list',["list" => $categorieList]);
    }

    function delete($id){
        //Product::destroy($id);
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect('/categorie')->with('messageD', 'Categoria eliminada');
        //return redirect()->route('products');
    }

    function form($id = null){
        if($id == null){
            $categorie = new Categorie();
        }else{
            $categorie = Categorie::findOrFail($id);
        }
        return view('/categorie/form',['categorie' => $categorie]);
    }

    function save(Request $request){
        $categorie = new Categorie();

        if($request->id > 0){
            $categorie = Categorie::findOrFail($request->id);
        }

        $request-> validate([
            'name' => 'required|max:50',
            'description' => 'required|max:50',
        ]);


        $categorie->name = $request->name;
        $categorie->description = $request->description;


        $categorie->save();
        return redirect('/categorie')->with('message', 'Categoria guardada');

    }
}
