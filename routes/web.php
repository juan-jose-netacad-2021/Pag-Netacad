<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;


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
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route:: get ("contactanos", [ContactanosController::class, 'index'])->name('contactanos.index');
Route:: post ("contactanos", [ContactanosController::class, 'store'])->name('contactanos.store');


/*
Route::get('/curso', function(){
    return view("curso");
})->name ('mi_curso');
*/
/*
Route:: get ("contactanos", [ContactanosController::class, 'index'])->name('contactanos.index');
Route:: post ("contactanos", [ContactanosController::class, 'store'])->name('contactanos.store');
*/
/*
Route::get("/correo", function(Request $request){
    
    // aqui envias el correo
    Mail::send('emails.remainder', ['name' => "esther"], function ($m) {
        //dd($m);
        $m->from('avrilalejandralimachi@gmail.com', 'Your Application');

        $m->to('avrilalejandralimachi@gmail.com','esther')->subject('Your Reminder!');
    });
});
*/

