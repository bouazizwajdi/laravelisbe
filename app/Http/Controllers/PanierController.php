<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{

    public function panier(){
        $products=[];
        if(session()->has("panier")){
        $products=session()->get("panier");
        }
        return view("website.panier",compact("products"));
    }

    public function delprodpanier($indice){
        $products=session()->get("panier");
        //dd($products);
        //supprimer un produit du panier
        unset( $products[$indice]);
        session()->put("panier",$products);
        return redirect()->back();
    }

    public function viderpanier(){
        session()->put("panier",[]);
        return redirect()->back();
    }

    public function addToCart(Request $request){
        //recuperer les information du produit
        $id=$request->id;
        $name=$request->name;
        $photo1=$request->photo1;
        $price=$request->price;
        $qty=$request->qty;

       //verifier si la variable panier existe dans la session ou pas
       //sinon on l'initialise
if(!session()->has("panier")){
    session()->put('panier',[]);
    }
 //ajouter un produit dans la session
    session()->push('panier',["id"=>$id,"name"=>$name,"price"=>$price,"qty"=>$qty,"photo1"=>$photo1]);

    return redirect()->back()->with('success',"Un nouveau produit est ajouté dans le panier");
}
}
