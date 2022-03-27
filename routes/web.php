<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\IssueBookController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\CategoriesController;

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

Route::view('testa', 'admin.users.index');

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('author', [PublicController::class, 'author'])->name('author');
Route::get('categories-1', [PublicController::class, 'categories'])->name('categories-1');
Route::get('all-author', [PublicController::class, 'author-all'])->name('all-author');
Route::get('all-categories', [PublicController::class, 'categories-all'])->name('all-categories');

Route::get('/book/{id}', [PublicController::class, 'single_book'])->name('book');
Route::post('/search-books', [SearchController::class, 'search'])->name('search-books');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/books', BooksController::class);
Route::get('mail',  [PublicController::class, 'send'])->name('mail');

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
        Route::resource('/students', StudentsController::class);
        Route::resource('/categories', CategoriesController::class);
        Route::resource('/issuebook', IssueBookController::class);
        /* Route::get('/books/{id}/edit', [BooksController::class, 'edit'])->name('books.edit');
        Route::delete('/books/{id}/delete', [BooksController::class, 'destroy'])->name('books.delete');
        Route::get('/books/{id}/show', [BooksController::class, 'show'])->name('books.show');
        Route::get('/books/{id}/update', [BooksController::class, 'update'])->name('books.update');
        Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
        Route::post('/books/store', [BooksController::class, 'store'])->name('books.store'); */


        //Rote to reissue book
        /* Route::get('/books/{id}/reissue', [BooksController::class, 'reissue'])->name('books.reissue');
        Route::post('/books/{id}/reissue', [BooksController::class, 'reissue'])->name('books.reissue'); */


        //Route to return book
        // Route::get('/books/{id}/return', [BooksController::class, 'return'])->name('books.return');
        Route::get('/settings', function () {
            return view('admin.settings.settings');
        })->name('settings');
    });

    Route::group(
        [
            'prefix' => 'student',
            'middleware' => 'role:student',
            'as' => 'student.'
        ],
        function () {
            Route::resource('profile', UserController::class);
            Route::post('reissue', [BooksController::class, 'reissue'])->name('books.reissue');
            Route::get('/home', function () {
                return view('user.index');
            });
        }
    );
});
