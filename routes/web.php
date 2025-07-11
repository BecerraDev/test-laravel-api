<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HofmannController;

Route::get('/get-users', function () {
    $response = Http::get('https://prueba.drogueriahofmann.cl/GetUsers');
    return $response->json();
});

Route::get('/list-users', function () {
    $response = Http::get('https://prueba.drogueriahofmann.cl/ListTableUsers');
    return $response->json();
});

Route::get('/hofmann/list-table', [HofmannController::class, 'listTableUsers']);
Route::get('/', [\App\Http\Controllers\HofmannController::class, 'listTableUsers']);

Route::get('/hofmann/send-user', [HofmannController::class, 'sendUser']);
Route::post('/hofmann/send-user', [HofmannController::class, 'sendUser']);
