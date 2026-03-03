<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        // coba akses model UserModel
        $user = UserModel::findOr (20, ['username', 'nama'], function () {abort(464);
        });
        return view('user', ['data' => $user]);
    }
}
