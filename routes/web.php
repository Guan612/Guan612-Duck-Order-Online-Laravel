<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Home'); // <-- 渲染 Home.tsx
});

require __DIR__.'/settings.php';
