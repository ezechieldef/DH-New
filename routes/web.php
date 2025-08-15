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

/*
|--------------------------------------------------------------------------
| Routes publiques multi-langue
|--------------------------------------------------------------------------
| Préfixe optionnel fr / en. Si aucune langue: fr par défaut.
*/
Route::group([
    'prefix' => '{lang?}',
    'where' => ['lang' => 'fr|en'],
    'middleware' => ['setlocale']
], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::view('/a-propos', 'pages.about')->name('about');
    Route::get('/processus', [PageController::class, 'process'])->name('process');

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

    Route::get('/projets', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projets/{slug}', [ProjectController::class, 'show'])->name('projects.show');

    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

    Route::get('/devis', [QuoteController::class, 'create'])->name('quote.create');
    Route::post('/devis', [QuoteController::class, 'store'])->name('quote.store');

    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});

/*
|--------------------------------------------------------------------------
| Zone Admin (protégée - rôle admin)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
});
