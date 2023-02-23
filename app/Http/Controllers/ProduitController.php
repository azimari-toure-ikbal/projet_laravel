<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Facades\File;

class ProduitController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        var_dump($categories[0]->id);
        return view('index', ['categories' => $categories]);
    }

    public function products(Request $request)
    {
        if($request->category != null) // filtre par catégorie
            $produits = Produit::where('categorie_id', $request->category)->get();
        else
            $produits = Produit::all();
        $categories = Categorie::all();
        return view('products', ['categories' => $categories, 'produits' => $produits]);
    }

    public function productCategory(Request $request, $id)
    {
        if($request->search != null) // si la recherche n'est pas vide
            $produits = Produit::where('categorie_id', $id)->where('nom', 'like', '%' . $request->search . '%')->get();
        else
            $produits = Produit::where('categorie_id', $id)->get();
        $category = Categorie::find($id);
        return view('category_products')->with('category', $category)->with('produits', $produits);
    }

    public function addProductForm()
    {
        $categories = Categorie::all();
        return view('add_product')->with('categories', $categories);
    }

    public function addProduct(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->input('productName');
        $produit->quantite = $request->input('productQte');
        $produit->prix = $request->input('productPrice');
        $file = $request->file('productImg');
        $filename = $file->getClientOriginalName();
        $produit->image = $filename;
        $file->move(public_path('images/produits'), $filename);
        $produit->solde = $request->input('productSolde');
        if($request->input('productSolde') == 'oui')
            $produit->montantSolde = $request->input('productSoldeValue');
        else
            $produit->montantSolde = 0;
        $produit->description = $request->input('productDesc');
        $produit->categorie_id = $request->input('categorieProduit');
        var_dump($produit);
        $produit->save();
        return redirect()->route('products');
    }

    public function productDetail($id)
    {
        $produit = Produit::find($id);
        $category = Categorie::find($produit->categorie_id);
        return view('product_detail')->with('produit', $produit)->with('category', $category);
    }

    public function editProductForm($id)
    {
        $produit = Produit::find($id);
        $categories = Categorie::all();
        return view('add_product')->with('produit', $produit)->with('categories', $categories);
    }

    public function editProduct(Request $request, $id)
    {
        $produit = Produit::find($id);
        $produit->nom = $request->input('productName');
        $produit->quantite = $request->input('productQte');
        $produit->prix = $request->input('productPrice');
        if($request->file('productImg') != null)
        {
            // delete image from folder
            $path = public_path('images/produits/' . $produit->image);
            if(File::exists($path))
                File::delete($path);
            $file = $request->file('productImg');
            $filename = $file->getClientOriginalName();
            $produit->image = $filename;
            $file->move(public_path('images/produits'), $filename);
        }
        $produit->solde = $request->input('productSolde');
        if($request->input('productSolde') == 'oui')
            $produit->montantSolde = $request->input('productSoldeValue');
        else
            $produit->montantSolde = 0;
        $produit->description = $request->input('productDesc');
        $produit->categorie_id = $request->input('categorieProduit');
        $produit->save();
        return redirect()->route('products');
    }

    public function deleteProduct($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        // delete image from folder
        $path = public_path('images/produits/' . $produit->image);
        if(File::exists($path))
            File::delete($path);
        return redirect()->route('products');
    }

    public function searchCategoryProduct(Request $request, $id)
    {
        // var_dump($request->search);
        // var_dump($id);
        $category = Categorie::find($id);
        $produits = Produit::where('nom', 'like', '%' . $request->search . '%')->get();
        // var_dump($produits);
        // var_dump($category);
        return view('product-category')->with('category', $category)->with('produits', $produits);
    }
}
