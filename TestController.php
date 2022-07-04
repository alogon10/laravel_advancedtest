<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $item = [
            'name' => '氏名',
            'mail' => 'メールアドレス'
        ];

        return view('index', $item);
    }
    public function post(Request $request)
    {        
        $item = [
            'name' => $request->name,
            'mail' => $request->mail,
        ];
        DB::table('users')->insert($item);
        return view('thanks',);
    }
}