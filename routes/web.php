<?php


use App\Models\Post;
use App\Models\Category;
use App\Models\Content;
use App\Models\Section;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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

Route::get('/shop', [PostController::class, 'index']);
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

Route::get('/order', function () {
    return view('order', [
        "title" => "Order"
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
