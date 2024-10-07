<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified','admin'])->name('admin.dashboard');
Route::get('/admin/users/create', [AdminController::class, 'createUser'])->middleware(['auth', 'verified','admin'])->name('admin.createUser');
Route::post('/admin/users', [AdminController::class, 'storeUser'])->middleware(['auth', 'verified','admin'])->name('admin.storeUser');
Route::get('/admin/books/create', [AdminController::class, 'createBook'])->middleware(['auth', 'verified','admin'])->name('admin.createBook');
Route::post('/admin/books', [AdminController::class, 'storeBook'])->middleware(['auth', 'verified','admin'])->name('admin.storeBook');
Route::get('books/filterByCategory', [AdminController::class, 'filterByCategory'])->middleware(['auth', 'verified','admin'])->name('books.filterByCategory');

Route::post('/books/select/{id}', [AdminController::class, 'selectBook'])->name('books.select');
Route::post('/books/select/{id}', [AdminController::class, 'select'])->name('books.select');



Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');




//محاولات فاشلة للترجمة

// Route::middleware(['setLocale'])->group(function () {
    //     Route::get('set-locale/{locale}', function ($locale) {
//         if(in_array($locale, ['ar','en'])) {
//             App::setLocale($locale);
//             session()->put('locale', $locale);
//         }
//         return redirect()->back();
//     })->name('set.locale');
// });


// Route::middleware(['SetLocale'])->group(function () {
//     Route::get('langcon/{local}' , function($locale){
    //         if(in_array($locale, ['ar' , 'en'])){
        //             session()->put('locale', $locale);
        //         }
        //         return redirect()->back();
        //     })->middleware(['auth', 'verified','SetLocale'])->name('langcon');

        // });

        // Route::get('/lang/{lang}', function ($lang) {
            //     Session::put('locale', $lang);
            //     App::setLocale($lang);
//     return redirect()->back();
// })->name('/lang');

// Route::group([
//     'prefix' => LaravelLocalization::setLocale(),

// ], function() {
//     Route::get('/', function () {
//         return view('welcome');
//     })->middleware(['auth', 'verified','localeMiddleware']);

//     // Add other routes here
// });

// Route::get('/set-locale/{locale}', function ($locale) {
//     Session::put('locale', $locale);
//     return redirect()->back();
// });
// Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['web', 'localizationRedirect', 'localeSessionRedirect', 'localeViewPath']], function() {
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

Route::get('/lang/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'ar'])) {
        Session::put('locale', $lang);
    }
    return redirect()->back();
})->name('switchLang');
