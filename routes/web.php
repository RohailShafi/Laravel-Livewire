<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\InlineComponent;

Route::get('/', function () {
    return view('welcome');
});

//dd('hi  am here');
Route::get('inline' , InlineComponent::class);
//dd('hi  am here');
