<?php
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::apiResource("v1/estudiantes",EstudianteController::class);