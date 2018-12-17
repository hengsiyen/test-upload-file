<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('upload', function () {
 $file = request()->file('file')->store('uploads', 's3');
 \App\Media::create([
     'src' => $file
 ]);
 return redirect('show-file');
})->name('upload');

Route::get('show-file', function () {
    $files = \App\Media::get();
    $urls = array();
    foreach ($files as $file) {
        $url = \Illuminate\Support\Facades\Storage::disk('s3')->url($file->src);
        array_push($urls, $url);
    }

    return view('showFile', compact('urls'));
})->name('show-file');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
