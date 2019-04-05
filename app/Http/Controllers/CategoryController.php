<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        
        return $categories = file_get_contents(database_path("data/categories.json"));
    }   
}
