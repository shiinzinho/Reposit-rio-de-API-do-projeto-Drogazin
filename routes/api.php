<?php

use App\Http\Controllers\FornecedoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('store', [FornecedoresController::class, 'store']);

Route::get('find/{id}', [FornecedoresController::class, 'pesquisarId']);