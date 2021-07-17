<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $categories = App\Models\category::all();
    return view('welcome')->with(['categories' => $categories]);
});
Route::get('/about', function () {
    $categories = App\Models\category::all();
    $about = App\Models\setting::latest()->first();
    return view('about')->with(['categories' => $categories,'data' => $about]);
});

Route::get('/contact', function () {
    $categories = App\Models\category::all();
    return view('contact')->with(['categories' => $categories]);
});

Route::get('/show-{id}-post', function ($id) {
    $categories = App\Models\category::all();
    $post = App\Models\posts::find($id);
    return view('singlePost')->with(['categories' => $categories,'post'=>$post]);
});
Route::post('/search', [\App\Http\Controllers\searchcontroller::class,'search'])->name('search');
Route::get('/category/{category}', [\App\Http\Controllers\searchcontroller::class,'searchByCategory'])->name('searchByCategory');


Route::middleware(['auth','checkadmin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::view('main', 'admin.dashboard')->name('admin.dashboard');
        // Route::get('posts',[PostsController::class,'index'])->name('admin.posts');
        Route::get('posts',App\Http\Livewire\Admin\CreatePost::class)->name('admin.posts');
        Route::get('posts/create',[PostsController::class,'create'])->name('create_post');
        Route::post('posts/store',[PostsController::class,'store'])->name('store_post');
        Route::delete('posts/delete/{id}',[PostsController::class,'delete'])->name('delete');
        Route::get('posts/edit/{id}',[PostsController::class,'edit'])->name('admin.edit_post');

        Route::post('posts/update/{id}',[PostsController::class,'update'])->name('admin.update_post');
        // Route::view('posts', 'admin.create_post')->name('admin.posts');
        Route::post('posts/upload_image',[PostsController::class,'uploadImage'])->name('upload');

        Route::get('clients',  App\Http\Livewire\Admin\Users::class)->name('admin.clients');
        Route::get('comments', App\Http\Livewire\Admin\comments::class)->name('admin.comments');
        Route::get('settings', App\Http\Livewire\Admin\Settings::class)->name('admin.settings');
        Route::get('categories', App\Http\Livewire\Admin\category::class)->name('admin.category');
        Route::get('dashboard', App\Http\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
