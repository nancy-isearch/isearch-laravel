<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\Front\PageController;
// Frontend Controllers
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::view('/about-us', 'frontend.pages.about')->name('about');
Route::view('/services', 'frontend.pages.services')->name('services');
Route::view('/contact-us', 'frontend.pages.contact')->name('contact');
Route::view('/test-section', 'frontend.pages.test-section')->name('test-section');

Route::get('/', [FrontendController::class, 'getHomeContent'])->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::get('/enquiry-chart', [DashboardController::class, 'getChartData']);
    Route::get('/enquiry-stats', [DashboardController::class, 'getEnquiryStats']);

    Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries/{id}', [EnquiryController::class, 'show'])->name('enquiries.show');
    Route::post('/enquiry/{id}/status', [EnquiryController::class, 'updateStatus'])->name('enquiry.status');

    // Icons
    Route::resource('icons', IconController::class);
    // Service Categories
    Route::resource('service-categories', ServiceCategoryController::class);
    Route::resource('menus', MenuController::class);

    Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
    Route::get('/seo/{page_key}', [SeoController::class, 'edit'])->name('seo.edit');
    Route::post('/seo/{page_key}', [SeoController::class, 'update'])->name('seo.update');

    Route::resource('pages', AdminPageController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('cities', CityController::class);
    Route::resource('section-templates', App\Http\Controllers\Admin\SectionTemplateController::class);
    Route::resource('section-fields', App\Http\Controllers\Admin\SectionFieldController::class);

});

Route::get('/{slug}', [PageController::class, 'show']);

// Frontend dynamic page catch-all route
Route::get('/{slug}', [DynamicPageController::class, 'show'])->name('page.show');



