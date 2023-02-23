<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ ProduitController::class, 'index']
)->name('home');

// Afficher tous les produits
Route::get('/products', [ProduitController::class, 'products'])->name('products');

// Afficher les produits d'une catégorie
Route::get('/category/{id}', [ ProduitController::class, 'productCategory']
)->name('product-category');

// Formulaire d'ajout d'un produit
Route::get('/addProductForm', [ProduitController::class, 'addProductForm'])->name('add-product');

// afficher le détail d'un produit
Route::get('/detail/{id}', [ProduitController::class, 'productDetail' ] )->name('product-detail');

// Ajouter un produit
Route::post('/addProduct', [ProduitController::class, 'addProduct'])->name('addProduct');

// Formulaire de modification d'un produit
Route::get('/editProductForm/{id}', [ProduitController::class, 'editProductForm'])->name('editProductForm');

// Modifier un produit
Route::put('/editProduct/{id}', [ProduitController::class, 'editProduct'])->name('editProduct');

// Supprimer un produit
Route::get('/deleteProduct/{id}', [ProduitController::class, 'deleteProduct'])->name('deleteProduct')->withTrashed();

Route::get('/searchCategoryProduct/{id}', [ProduitController::class, 'searchCategoryProduct'])->name('searchCategoryProduct');
