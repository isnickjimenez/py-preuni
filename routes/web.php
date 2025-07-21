<?php

use App\Http\Controllers\Api\DniController;
use App\Http\Controllers\EnrollmentCotroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/***  Public Route  ***/
/**********************/

Route::get('/', [HomeController::class, 'prepage'])
        ->name('home.prepage');         // Para la pagina web de Pre champita
Route::get('matricula/create', [HomeController::class, 'create'])
        ->name('public.enrollments.create');
Route::post('matricula', [HomeController::class, 'store'])
        ->name('public.enrollments.store');


/***  Private Route  ***/
/***********************/

Route::resource('matriculados', EnrollmentCotroller::class)
        ->parameters(['matriculados' => 'enrollment'])
        ->names('private.enrollments');


/***    API Route    ***/
/***********************/

Route::post('/query', DniController::class)->name('api.invoke');

