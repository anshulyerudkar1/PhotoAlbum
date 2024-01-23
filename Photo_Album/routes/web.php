<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Adminpanel\LogInController;
use App\Http\Controllers\Adminpanel\MainAlbumController;
use App\Http\Controllers\Adminpanel\SubAlbumController;
use App\Http\Controllers\Adminpanel\SubSubAlbumController;
use App\Http\Controllers\Adminpanel\SubVideoAlbumController;
use App\Http\Controllers\Adminpanel\MainImgAlbumController;
use App\Http\Controllers\Adminpanel\MainVideoAlbumController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/sub/{id}', [HomeController::class, 'sub']);
Route::get('/sub/sub/{id}', [HomeController::class, 'subSub']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Route::get('/admin', [MainAlbumController::class, 'index'])->middleware('guard');
Route::get('/admin', [MainAlbumController::class, 'index']);
Route::get('/main/data/add', [MainAlbumController::class, 'mainDataAdd']);
Route::get('/main/data/delete/{id}', [MainAlbumController::class, 'mainDataDelete']);
Route::get('/main/data/edit/{id}', [MainAlbumController::class, 'mainDataEdit']);
Route::post('/main/data/update/{id}', [MainAlbumController::class, 'mainDataUpdate']);
Route::post('/main/store/data', [MainAlbumController::class, 'store']);
Route::get('/sub/data/add', [SubAlbumController::class, 'subDataAdd']);
Route::get('/sub/data/addWith/{id}', [SubAlbumController::class, 'subDataAddWith']);
Route::get('/sub/data/delete/{id}', [SubAlbumController::class, 'subDataDelete']);
Route::get('/sub/dataClick/delete/{id}', [SubAlbumController::class, 'subDataClickDelete']);
Route::get('/sub/data/edit/{id}', [SubAlbumController::class, 'subDataEdit']);
Route::get('/sub/dataClick/edit/{id}', [SubAlbumController::class, 'subDataClickEdit']);
Route::post('/sub/data/update/{id}', [SubAlbumController::class, 'subDataUpdate']);
Route::post('/sub/dataClick/update/{id}', [SubAlbumController::class, 'subDataClickUpdate']);
Route::get('/admin/sub', [SubAlbumController::class, 'index']);
Route::get('/admin/sub/subClick/{id}', [SubAlbumController::class, 'subClick']);
Route::post('/sub/store/data', [SubAlbumController::class, 'store']);
Route::post('/sub/storeWith/data', [SubAlbumController::class, 'storeWith']);

//Sub sub img Album
Route::get('/sub/img/data/add', [SubSubAlbumController::class, 'subDataAdd']);
Route::get('/sub/img/data/addWith/{id}', [SubSubAlbumController::class, 'subDataAddWith']);
Route::get('/sub/img/data/delete/{id}', [SubSubAlbumController::class, 'subDataDelete']);
Route::get('/sub/img/dataWith/delete/{id}', [SubSubAlbumController::class, 'subDataWithDelete']);
Route::get('/sub/img/data/edit/{id}', [SubSubAlbumController::class, 'subDataEdit']);
Route::get('/sub/img/dataWith/edit/{id}', [SubSubAlbumController::class, 'subDataWithEdit']);
Route::post('/sub/img/data/update/{id}', [SubSubAlbumController::class, 'subDataUpdate']);
Route::post('/sub/img/dataWith/update/{id}', [SubSubAlbumController::class, 'subDataWithUpdate']);
Route::get('/admin/sub/img', [SubSubAlbumController::class, 'index']);
Route::get('/admin/sub/imgClick/{id}', [SubSubAlbumController::class, 'subSubClick']);
Route::get('/admin/sub/subSubClick/{id}', [SubSubAlbumController::class, 'subSubClick']);
Route::post('/sub/img/store/data', [SubSubAlbumController::class, 'store']);
Route::post('/sub/img/storeWith/data', [SubSubAlbumController::class, 'storeWith']);

//Sub sub video Album
Route::get('/sub/vid/data/add', [SubVideoAlbumController::class, 'subDataAdd']);
Route::get('/sub/vid/data/addWith/{id}', [SubVideoAlbumController::class, 'subDataWithAdd']);
Route::get('/sub/vid/data/delete/{id}', [SubVideoAlbumController::class, 'subDataDelete']);
Route::get('/sub/vid/dataWith/delete/{id}', [SubVideoAlbumController::class, 'subDataWithDelete']);
Route::get('/sub/vid/data/edit/{id}', [SubVideoAlbumController::class, 'subDataEdit']);
Route::get('/sub/vid/dataWith/edit/{id}', [SubVideoAlbumController::class, 'subDataWithEdit']);
Route::post('/sub/vid/data/update/{id}', [SubVideoAlbumController::class, 'subDataUpdate']);
Route::post('/sub/vid/dataWith/update/{id}', [SubVideoAlbumController::class, 'subDataWithUpdate']);
Route::get('/admin/sub/vid', [SubVideoAlbumController::class, 'index']);
Route::get('/admin/sub/vidWith/{id}', [SubVideoAlbumController::class, 'subSubClick']);
Route::post('/sub/vid/store/data', [SubVideoAlbumController::class, 'store']);
Route::post('/sub/vid/storeWith/data', [SubVideoAlbumController::class, 'storeWith']);

//Main sub img Album
Route::get('/main/img/data/add', [MainImgAlbumController::class, 'mainDataAdd']);
Route::get('/main/img/dataWith/add/{id}', [MainImgAlbumController::class, 'mainDataWithAdd']);
Route::get('/main/img/data/delete/{id}', [MainImgAlbumController::class, 'mainDataDelete']);
Route::get('/main/img/dataClick/delete/{id}', [MainImgAlbumController::class, 'mainDataClickDelete']);
Route::get('/main/img/data/edit/{id}', [MainImgAlbumController::class, 'mainDataEdit']);
Route::get('/main/img/dataWith/edit/{id}', [MainImgAlbumController::class, 'mainDataClickEdit']);
Route::post('/main/img/data/update/{id}', [MainImgAlbumController::class, 'mainDataUpdate']);
Route::post('/main/img/dataClick/update/{id}', [MainImgAlbumController::class, 'mainImgDataClickUpdate']);
Route::get('/admin/main/img', [MainImgAlbumController::class, 'index']);
Route::get('/admin/mainClick/img/{id}', [MainImgAlbumController::class, 'mainImgClick']);
Route::post('/main/img/store/data', [MainImgAlbumController::class, 'store']);
Route::post('/main/img/storeWith/data', [MainImgAlbumController::class, 'storeWith']);

//Main sub video Album
Route::get('/main/vid/data/add', [MainVideoAlbumController::class, 'mainDataAdd']);
Route::get('/main/vid/dataWith/add/{id}', [MainVideoAlbumController::class, 'mainDataWithAdd']);
Route::get('/main/vid/data/delete/{id}', [MainVideoAlbumController::class, 'mainDataDelete']);
Route::get('/main/vid/dataClick/delete/{id}', [MainVideoAlbumController::class, 'mainDataClickDelete']);
Route::get('/main/vid/data/edit/{id}', [MainVideoAlbumController::class, 'mainDataEdit']);
Route::get('/main/vid/dataClick/edit/{id}', [MainVideoAlbumController::class, 'mainDataClickEdit']);
Route::post('/main/vid/data/update/{id}', [MainVideoAlbumController::class, 'mainDataUpdate']);
Route::post('/main/vid/dataClick/update/{id}', [MainVideoAlbumController::class, 'mainDataClickUpdate']);
Route::get('/admin/main/vid', [MainVideoAlbumController::class, 'index']);
Route::get('/admin/main/vidWith/{id}', [MainVideoAlbumController::class, 'mainVideoClick']);
Route::post('/main/vid/store/data', [MainVideoAlbumController::class, 'store']);
Route::post('/main/vid/storeWith/data', [MainVideoAlbumController::class, 'storeWith']);


Route::get('/login', [LogInController::class, 'index']);
Route::post('/admin/login', [LogInController::class, 'login']);
Route::get('/admin/logout', [LogInController::class, 'logOut']);

