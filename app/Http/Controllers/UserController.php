<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        // Menghitung jumlah user dengan level_id 2
        /*$userCount = UserModel::firstOrCreate(
            [
                'username' => 'manager22',
                'nama' => 'Manager dua dua',
                'password' => Hash::make('12345'),
                'level_id'=> 2
            ],
        );*/
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager tiga tiga',
                'password'=> Hash::make('12345'),
                'level_id'=> 2
            ],
        );
        $user->save();
        // Kirim ke view 'user' dengan nama key 'data'
        return view('user', ['data' => $user]);
    }
} 
