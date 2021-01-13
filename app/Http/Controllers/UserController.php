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

    public function addUser(Request $request) {
        $user = new UserModel();

        $user->id = $request->id;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->createAt = $request->createAt;
        $user->save();

        return $request;
    }
}
