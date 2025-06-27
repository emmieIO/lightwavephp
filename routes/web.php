<?php

use Emmieio\PhpViteStarter\Facades\Route;



Route::get("/welcome", fn()=>app()->view('home',["my_story"=>"I am Rich!!"]));