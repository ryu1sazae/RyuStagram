<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // ただの変数定義ですが、ここでModelにデータの処理を行わせたりします（後述）。
        $name = 'ryu1';

        // ここでuserビュー「user.blade.php」を呼び出し、データ「name」を渡している。
        return view('user.home', ['name' => $name]);
    }
}