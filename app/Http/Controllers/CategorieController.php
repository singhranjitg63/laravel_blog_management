<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function addCategorie(Request $request){

         $request->validate([
            'name'=>'required',
         ]);

        $categorieData = new Categorie();
        
        $categorieData->name = $request->name;
        $categorieData->save();
        if($categorieData){
        return redirect('/categories');
        }
    }

    public function showCategorie(){
        $showList = Categorie::paginate(4);    
        return view('Categories',['listing'=> $showList]);
    }
    public function editCategory($id){
        $categorie = Categorie::find($id);
        return view('createCategorie',['showCategory' => $categorie]);
    }
    public function updateCategory(Request $request,$id){
        $categorie = Categorie::find($id);
        $categorie->name = $request->name;
        
        if ($categorie->save()) {
            return redirect('/categories');
        }
        else{
            return "update operation failed";
        }
    }
}
