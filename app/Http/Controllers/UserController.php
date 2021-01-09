<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function getUser() {
        $user = UserModel::all();

        return $user;
    }
}
