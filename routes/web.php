<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SearchController;
use Illuminate\Routing\RouteGroup;


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


Auth::routes();

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/show', [PublicController::class, 'show'])->name('show');
Route::post('/search-books', [SearchController::class, 'search'])->name('search-books');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/books', BooksController::class);
Route::get('/test', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'role:admin',
        'as' => 'admin.'
    ], function () {
        Route::get('/', function () {
            return view('admin.home');
        });
        Route::resource('/books', BooksController::class);
        Route::get('/books/{id}/edit', [BooksController::class, 'edit'])->name('books.edit');
        Route::get('/books/{id}/delete', [BooksController::class, 'destroy'])->name('books.delete');
        Route::get('/books/{id}/show', [BooksController::class, 'show'])->name('books.show');
        Route::get('/books/{id}/update', [BooksController::class, 'update'])->name('books.update');
        Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
        Route::post('/books/store', [BooksController::class, 'store'])->name('books.store');

        //Route to issue book
        Route::get('/books/{id}/issue', [BooksController::class, 'issue'])->name('books.issue');
        Route::post('/books/{id}/issue', [BooksController::class, 'issue'])->name('books.issue');
        //Rote to reissue book
        Route::get('/books/{id}/reissue', [BooksController::class, 'reissue'])->name('books.reissue');
        Route::post('/books/{id}/reissue', [BooksController::class, 'reissue'])->name('books.reissue');

        //Route to return book
        Route::get('/books/{id}/return', [BooksController::class, 'return'])->name('books.return');
        Route::get('/settings', function () {
            return view('admin.settings.settings');
        })->name('settings');
    });

    Route::group(
        [
            'prefix' => 'user',
            'middleware' => 'role:user',
            'as' => 'user.'
        ],
        function () {
            Route::get('/user', function () {
                return view('user.index');
            });
        }
    );
});
