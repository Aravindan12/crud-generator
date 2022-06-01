<?php

use Illuminate\Support\Facades\Route;
use Chillout\CrudGenerator\App\Http\Controllers\CheckController;

Route::get('/test',[CheckController::class,'test']);