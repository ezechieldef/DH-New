<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect(app()->getLocale()));
Route::get('/{locale}', function (string $locale) {
    app()->setLocale($locale);
    return view('home');
})->name('home');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'fr|en']], function () {

    Route::view('/a-propos', 'pages.about')->name('about');
    Route::view('/process', 'pages.process')->name('process');
    Route::view('/faq', 'pages.faq')->name('faq.index');

    Route::get('/contact', function ($locale) {
        app()->setLocale($locale);
        return view('pages.contact', [
            'services' => ['Conseil', 'Développement', 'Architecture', 'Audit', 'UX/UI', 'Support']
        ]);
    })->name('contact.create');
    Route::post('/contact', fn() => back()->with('status', 'Message envoyé'))->name('contact.store');

    Route::view('/devis', 'pages.quote')->name('quote.create');
    Route::post('/devis', fn() => back()->with('status', 'Demande envoyée'))->name('quote.store');

    // Services
    Route::get('/services', function ($locale) {
        app()->setLocale($locale);
        return view('services.index', ['services' => ['Conseil', 'Développement', 'Architecture']]);
    })->name('services.index');

    Route::get('/services/{slug}', function ($locale, $slug) {
        app()->setLocale($locale);
        return view('services.show', ['slug' => $slug, 'service' => ['name' => ucfirst(str_replace('-', ' ', $slug))]]);
    })->name('services.show');

    // Projects
    Route::get('/projets', function ($locale) {
        app()->setLocale($locale);
        return view('projects.index');
    })->name('projects.index');

    Route::get('/projets/{slug}', function ($locale, $slug) {
        app()->setLocale($locale);
        return view('projects.show', ['slug' => $slug]);
    })->name('projects.show');

    // Blog
    Route::get('/blog', function ($locale) {
        app()->setLocale($locale);
        return view('blog.index');
    })->name('blog.index');

    Route::get('/blog/{slug}', function ($locale, $slug) {
        app()->setLocale($locale);
        return view('blog.show', ['slug' => $slug]);
    })->name('blog.show');

    // Admin (placeholder)
    Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
});
