<?php

use App\Http\Controllers\GeradorQRCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/api', [GeradorQRCodeController::class,'index']);
// Route::post('/api', function (){
//     return 'api vitoria';
// });
