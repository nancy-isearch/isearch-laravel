<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\Front\PageController;
// Frontend Controllers
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/testimonials', [FrontendController::class, 'getTestimonials'])->name('frontend.testimonials');
Route::get('/clients', [FrontendController::class, 'getClients'])->name('frontend.clients');
Route::get('/', [FrontendController::class, 'getHomeContent'])->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    

    // Icons
    Route::resource('icons', IconController::class);
    // Service Categories
    Route::resource('service-categories', ServiceCategoryController::class);

    Route::post('pages/{page}/copy', [AdminPageController::class, 'copy'])->name('pages.copy');
    Route::resource('pages', AdminPageController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('cities', CityController::class);
    Route::resource('templates', App\Http\Controllers\Admin\TemplateController::class);
    Route::resource('section-templates', App\Http\Controllers\Admin\SectionTemplateController::class);
    Route::resource('section-fields', App\Http\Controllers\Admin\SectionFieldController::class);
    Route::resource('testimonials', App\Http\Controllers\TestimonialController::class);
    Route::resource('clients', App\Http\Controllers\ClientController::class);
});

Route::get('/{slug}', [PageController::class, 'show']);

// Frontend dynamic page catch-all route
Route::get('/{slug}', [DynamicPageController::class, 'show'])->name('page.show');



