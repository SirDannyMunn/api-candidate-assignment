<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthRequest;

class UserController extends Controller
{
    public function auth(UserAuthRequest $request)
    {
        return $user = collect(json_decode(file_get_contents(database_path("data/users.json")), true))->firstWhere('email', $request->input('email'));
    }
}
