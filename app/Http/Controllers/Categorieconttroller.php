<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class Categorieconttroller extends Controller
{
    public function addCategorie(Request $request){
        $categorieData = new Categorie();
        $categorieData->name = $request->name;
        $categorieData->save();
        if($categorieData){
        return "add categorie in database";
        }
    }

}
