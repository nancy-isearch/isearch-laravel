<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SeoController;

//Frontend Controllers
use App\Http\Controllers\FrontendController;

Auth::routes();
// Route::view('/', 'frontend.pages.home');
Route::view('/about-us', 'frontend.pages.about')->name('about');
Route::view('/services', 'frontend.pages.services')->name('services');
Route::view('/contact-us', 'frontend.pages.contact')->name('contact');
Route::post('/enquiry', [EnquiryController::class, 'store']);
Route::get('/', [FrontendController::class, 'getHomeContent'])->name('home'); 

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/enquiry-chart', [DashboardController::class, 'getChartData']);
    Route::get('/enquiry-stats', [DashboardController::class, 'getEnquiryStats']);

    Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries/{id}', [EnquiryController::class, 'show'])->name('enquiries.show');
    Route::post('/enquiry/{id}/status', [EnquiryController::class, 'updateStatus'])->name('enquiry.status');

    //Icons
    Route::resource('icons', IconController::class);
    //Service Categories
    Route::resource('service-categories', ServiceCategoryController::class);
    // Dynamic Pages and Menus
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class);
    Route::resource('menus', App\Http\Controllers\Admin\MenuController::class);
    
    Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
    Route::get('/seo/{page_key}', [SeoController::class, 'edit'])->name('seo.edit');
    Route::post('/seo/{page_key}', [SeoController::class, 'update'])->name('seo.update');


});

// Frontend dynamic page catch-all route
Route::get('/{slug}', [App\Http\Controllers\DynamicPageController::class, 'show'])->name('page.show');