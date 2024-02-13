<?php

use App\Models\Media;
use App\Models\Actor;

Route::get('/films', function () {
    $films = Media::where('is_series', false)->get();
    return view('films', ['films' => $films]);
});

Route::get('/series', function () {
    $series = Media::where('is_series', true)->get();
    return view('series', ['series' => $series]);
});

Route::get('/search', function () {
});

Route::get('/acteurs', function () {
    $actors = Actor::all();
    return view('acteurs', ['actors' => $actors]);
});
