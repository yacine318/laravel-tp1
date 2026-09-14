<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produitC;


Route::get('/', [produitC::class, 'index']);
// Appel méthode index du contrôleur produitC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/
Route::get('/consulter', [produitC::class, 'all'])->name('consulter');
// Appel méthode all du contrôleur produitC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/consulter
// nom donné à la route pour utiliser redirection lors de la création d'un nouveau produit
Route::get('/ajouter', [produitC::class, 'newp']);  
// Appel méthode newp du contrôleur produitC à partir de l'url
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/ajouter
// => Form de saisie d'un nouveau produit
Route::post('ajoutersave', [produitC::class, 'newsave']);  
// Appel méthode newsave du contrôleur à partir de l'url 
// => Traitement des données du form de saisie d'un nouveau produit


