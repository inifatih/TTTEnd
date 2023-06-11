<?php

use App\Http\Controllers\CartController;
use App\Models\Post;
use App\Models\Content;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardContentController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('landing', [
        "title" => "Home",
        "contents" => Content::all()
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        "title" => "Categories",
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts->load('category', 'section'),
        'category' => $category->name,
    ]);
});

Route::get('/sections', function() {
    return view('sections', [
        "title" => "Sections",
        "sections" => Section::all()
    ]);
});

Route::get('/sections/{section:slug}', function(Section $section){
    return view('section', [
        'title' => $section->name,
        'posts' => $section->posts->load('category', 'section'),
        'section' => $section->name
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword', [
        "title" => "Forgot Password"
    ]);
});
Route::get('/resetpassword', function () {
    return view('resetpassword', [
        "title" => "Reset Password"
    ]);
});
Route::get('/help', function () {
    return view('help', [
        "title" => "Help"
    ]);
});

Route::get('/cart', function () {
    return view('cart', [
        "title" => "Cart"
    ]);
})->middleware('auth');

Route::get('/checkout', function () {
    return view('checkout');
})->middleware('auth');



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('admin');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');
Route::resource('/dashboard/contents', DashboardContentController::class)->middleware('admin');

Route::get('add-to-cart/{post:id}', [PostController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [PostController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [PostController::class, 'remove'])->name('remove_from_cart');

Route::post('makeOrder', [CartController::class, 'order'])->name('order');
Route::get('/order', [OrderController::class, 'index'])->name('listOrder');