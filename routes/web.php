<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function() {
    Route::get('/','home')->name('home');

    Route::get('blog','blog')->name('blog');

    Route::get('blog/{post:id}', 'post')->name('post');

});

Route::get('/dashboard', function () {
    return view('c');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('cats', CatController::class)->except('show');


require __DIR__.'/auth.php';
