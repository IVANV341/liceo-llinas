<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::get('/health', fn() => 'ok '.app()->version());


Route::prefix('/colegio')->group(function () {
    Route::view('/', 'pages.colegio.index')->name('colegio');
    Route::view('/mision-vision', 'pages.colegio.mision')->name('colegio.mision');
    Route::view('/directivos', 'pages.colegio.politica_de_calidad')->name('colegio.politica_de_calidad');
});

Route::view('/proyecto-educativo', 'pages.proyecto')->name('proyecto');

Route::prefix('/noticias')->group(function () {
    Route::view('/', 'pages.noticias.index')->name('noticias');
    Route::view('/{slug}', 'pages.noticias.show')->name('noticias.show'); // futuro dinámico
});

Route::view('/publicaciones', 'pages.publicaciones')->name('publicaciones');
Route::view('/olimpiadas', 'pages.olimpiadas')->name('olimpiadas');
Route::view('/admisiones', 'pages.admisiones')->name('admisiones');
Route::view('/pqrsd', 'pages.pqrsd')->name('pqrsd');
Route::view('/contacto', 'pages.contacto')->name('contacto');


// Landing de servicios (ya la tienes)
Route::view('/servicios', 'pages.servicios')->name('servicios');

// Subservicios
Route::prefix('/servicios')->name('servicios.')->group(function () {
    Route::view('/guarderia', 'pages.servicios.guarderia')->name('guarderia');
    Route::view('/preescolar', 'pages.servicios.preescolar')->name('preescolar');
    Route::view('/basica-primaria', 'pages.servicios.basica_primaria')->name('basica_primaria');
    Route::view('/basica-secundaria', 'pages.servicios.basica_secundaria')->name('basica_secundaria');
    Route::view('/educacion-media', 'pages.servicios.educacion_media')->name('educacion_media');
});

// Actividades (listado con foto + descripción)
Route::view('/actividades', 'pages.actividades.index')->name('actividades');

// Galería (mosaico de fotos con modal)
Route::view('/galeria', 'pages.galeria.index')->name('galeria');
