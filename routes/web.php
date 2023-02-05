<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCtaegoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('home');
    Route::get('/supplier_add',[SupplierController::class,'addSuppliser'])->name('supplier.add');
    Route::post('/new_supplier',[SupplierController::class,'saveSuppliser'])->name('new.supplier');

    Route::get('/supplier_list',[SupplierController::class,'manageSuppliser'])->name('supplier.list');

    Route::get('/status/{id}', [SupplierController::class, 'status'])->name('status');
    Route::get('/edit/{id}', [SupplierController::class, 'edit'])->name('edit');
    Route::post('/update', [SupplierController::class, 'updateSupplier'])->name('update.supplier');

    Route::post('/delete', [SupplierController::class, 'delete'])->name('delete');

            // category----Route------------

    Route::get('/category_add',[CategoryController::class,'addCategory'])->name('category.add');
    Route::post('/new_category',[CategoryController::class,'saveCategory'])->name('new.category');

    Route::get('/category_list',[CategoryController::class,'manageCategory'])->name('category.list');

    Route::get('/subCategoryAdd',[SubCtaegoryController::class,'addSubCategory'])->name('subCategory.add');
    Route::post('/new_subCategory',[SubCtaegoryController::class,'saveSubCategory'])->name('new.subCategory');

    Route::get('/subCategory_list',[SubCtaegoryController::class,'manageSubCategory'])->name('subCategory.list');
    Route::post('/delete_subCategory', [SubCtaegoryController::class, 'SubCatdelete'])->name('delete.subCategory');


});
