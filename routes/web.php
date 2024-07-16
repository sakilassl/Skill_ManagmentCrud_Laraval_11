<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\TechnicalSkillController;
use App\Http\Controllers\SoftSkillController;

Route::resource('home', HomeController::class);
Route::resource('profiles', ProfileController::class);
Route::resource('qualifications', QualificationController::class);
Route::resource('technical-skills', TechnicalSkillController::class);
Route::resource('soft-skills', SoftSkillController::class);


