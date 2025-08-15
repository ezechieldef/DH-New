<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    PageController,
    ServiceController,
    ProjectController,
    BlogController,
    FaqController,
    QuoteController,
    ContactController
};
use App\Http\Middleware\SetLocale;

/*
|--------------------------------------------------------------------------
| Routes publiques avec gestion de langue
|--------------------------------------------------------------------------
| On applique directement le middleware de locale via sa classe
| pour éviter toute collision avec la fonction PHP setlocale().
| Le segment {lang?} accepte fr ou en. Sans segment, on retombe sur la locale
| par défaut (config('app.locale')) via le middleware.
|
| Option : si tu veux forcer une redirection / -> /fr, dé-commente la route
| de redirection plus bas.
*/

// (Optionnel) Redirection racine vers /fr
// Route::get('/', fn () => redirect('/fr'));

Route::group([
    'prefix'     => '{lang?}',
    'where'      => ['lang' => 'fr|en'],
    'middleware' => [SetLocale::class],
], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Pages statiques / process / about
    Route::view('/a-propos', 'pages.about')->name('about');
    Route::get('/processus', [PageController::class, 'process'])->name('process');

    // Services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

    // Projets
    Route::get('/projets', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projets/{slug}', [ProjectController::class, 'show'])->name('projects.show');

    // FAQ
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

    // Blog
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

    // Devis
    Route::get('/devis', [QuoteController::class, 'create'])->name('quote.create');
    Route::post('/devis', [QuoteController::class, 'store'])->name('quote.store');

    // Contact
    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});

/*
|--------------------------------------------------------------------------
| Zone Admin (protégée)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
});
