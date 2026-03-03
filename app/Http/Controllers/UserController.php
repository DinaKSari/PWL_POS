<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        // Menghitung jumlah user dengan level_id 2
        $userCount = UserModel::where('level_id', 2)->count();

        // Kirim ke view 'user' dengan nama key 'data'
        return view('user', ['data' => $userCount]);
    }
}
