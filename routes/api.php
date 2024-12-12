<?php

use App\Http\Controllers\GeradorQRCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/qrcode',[GeradorQRCodeController::class,'gerarQRCode']);
