<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function addCategorie(Request $request){
        $categorieData = new Categorie();
        $categorieData->name = $request->name;
        $categorieData->save();
        if($categorieData){
        return redirect('/categories');
        }
    }

    public function showCategorie(){
        $showList = Categorie::all();
        // $categorieData =     
        return view('Categories',['listing'=> $showList]);
    }

  
}
