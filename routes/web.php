<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\User;

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

Route::any('/', function () {
    return redirect(route('dashboard'));
});


Route::group(['prefix' => '', 'middleware' => 'auth:sanctum','verified'], function () {
    Route::get('dashboard', [User\DashboardController::class, 'index'])->name('dashboard');
    Route::get('product', [User\ProductController::class, 'index'])->name('product');
    Route::get('checkout', [User\CheckoutController::class, 'index'])->name('checkout');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:sanctum','verified'], function () {
    Route::get("/dashboard", [Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('product')->group(function() {
        Route::get("", [Admin\ProductController::class, 'index'])->name('admin.product');
        Route::get("/create", [Admin\ProductController::class, 'create'])->name('admin.product.create');
        Route::get("/edit/{id}", [Admin\ProductController::class, 'edit'])->name('admin.product.edit');
        Route::get("/show/{id}", [Admin\ProductController::class, 'show'])->name('admin.product.show');
        //Post Requests
        Route::post("/create", [Admin\ProductController::class, 'store']);
        Route::post("/edit/{id}", [Admin\ProductController::class, 'update_record'])->name('admin.product.edit');
        // Delete Request
        Route::delete("/delete/{id}", [Admin\ProductController::class, 'destroy'])->name('admin.product.delete');
    });

    Route::prefix('report')->group(function() {
        Route::get("", [Admin\ReportController::class, 'index'])->name('admin.report');
        Route::get("/create", [Admin\ReportController::class, 'create'])->name('admin.report.create');
        Route::get("/edit/{id}", [Admin\ReportController::class, 'edit'])->name('admin.report.edit');
        Route::get("/show/{id}", [Admin\ReportController::class, 'show'])->name('admin.report.show');
        //Post Requests
        Route::post("/create", [Admin\ReportController::class, 'store']);
        Route::post("/edit/{id}", [Admin\ReportController::class, 'update_record'])->name('admin.report.edit');
        // Delete Request
        Route::delete("/delete/{id}", [Admin\ReportController::class, 'destroy'])->name('admin.report.delete');
    });

});
