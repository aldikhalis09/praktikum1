<?php


use App\Http\Controllers\Biodatacontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('biodata', function () {
  $data=[
      'nama'=>'Aldial Khalis Sultanda',
      'lahir'=>'Bandung',
      'hobi'=>'futsal',
      'jk'=>'laki-laki',
      'agama'=>'islam',
      'alamat'=>'permata biru blok y2 279',
      'telp'=>'008475247755',
      'email'=>'aldikhalis9@gmail.com',
      'photo'=>'../img/uy.jpg',
 ];
  return view('biodata',$data);
});


route::get ('/list',[Biodatacontroller::class,'index']);
Route::get('/add_siswa', [BiodataController::class, 'create'])->name('add-siswa');
Route::post('/store_siswa', [BiodataController::class, 'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit-siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');



