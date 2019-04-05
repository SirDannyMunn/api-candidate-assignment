<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShowUserRequest;

class UserController extends Controller
{
    public function show(ShowUserRequest $request)
    {
        return $user = collect(json_decode(file_get_contents(database_path("data/users.json")), true))->firstWhere('id', $request->input('id'));
    }
}
