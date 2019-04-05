<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function index()
    {
        return $adverts = file_get_contents(database_path("data/adverts.json"));
    }
}
