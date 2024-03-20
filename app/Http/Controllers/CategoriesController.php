<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{


public function __construct(){
    $this->middleware("auth");
}



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        //la fonction compact sert a transmettre les variables vers la vue
        return view("admin.categories.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Securité : controle sur les champs
$request->validate([
    "name"=>"required|max:100|unique:categories"
]);
        //insertion dans la base de données
Category::create($request->all());
//redirection vers la page liste avec l'envoi d'un message de success
//with envoi des variable sous forme de session flash
        return redirect()->route("categories.index")->with("message","Une nouvelle categorie est ajoutée avec succès!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("admin.categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //validation
        $request->validate([
            'name' => 'required',
            ]);
//mise a jour avec eloquent
            $category->update($request->all());
//redirection vers index
            return redirect()->route("categories.index")->with("message","La categorie est modifiée avec succès!");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route("categories.index")->with("message","Une categorie est supprimée avec succès!");;
    }
}
