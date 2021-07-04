<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

//Route::resource('mail',MailController::class);



/*
Route::get('/curso', function(){
    return view("curso");
})->name ('mi_curso');


Route::post("/correo", function(Request $request){
    
    // aqui envias el correo
    Mail::send('email',$request->all(), function($msj) use($subject,$for){
        $msj->from("tucorreo@gmail.com","NombreQueApareceráComoEmisor");
        $msj->subject($subject);
        $msj->to($for);
    });
    return $request;
})
*/
