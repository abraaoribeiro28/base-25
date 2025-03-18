<?php

declare(strict_types = 1);

use App\Enums\Can;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));
Route::get('/login/{id}', fn ($id) => Auth::loginUsingId($id));
Route::get('/users/{user}', fn ($user) => $user)
    ->can(Can::ViewUser->value);
