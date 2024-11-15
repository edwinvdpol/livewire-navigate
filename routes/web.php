<?php

use App\Livewire\One;
use App\Livewire\Three;
use App\Livewire\Two;
use Illuminate\Support\Facades\Route;

Route::get('/', One::class);
Route::get('/two', Two::class);
Route::get('/three', Three::class);
