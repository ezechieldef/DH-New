<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Default route redirects to French
Route::get('/', function () {
    return redirect('/fr');
});

// Multi-language routes
Route::group([
    'prefix' => '{lang?}',
    'where' => ['lang' => 'fr|en'],
    'middleware' => 'setlocale'
], function () {
    // Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    // About & Process
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/process', [PageController::class, 'process'])->name('process');
    
    // Services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{service:slug}', [ServiceController::class, 'show'])
        ->where('service', '[a-zA-Z0-9\-]+')
        ->name('services.show');
    
    // Projects
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])
        ->where('project', '[a-zA-Z0-9\-]+')
        ->name('projects.show');
    
    // Blog
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{post:slug}', [BlogController::class, 'show'])
        ->where('post', '[a-zA-Z0-9\-]+')
        ->name('blog.show');
    
    // FAQ
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    
    // Quote
    Route::get('/quote', [QuoteController::class, 'create'])->name('quote.create');
    Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
    
    // Contact
    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});

// Admin routes (protected by auth + role)
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:admin']
], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Add more admin routes here as needed
});
