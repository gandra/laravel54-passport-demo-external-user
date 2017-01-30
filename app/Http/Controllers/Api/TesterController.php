<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TesterController extends Controller
{
    public function test()
    {
        return ['aaa', 'bbb'];
    }

    public function testUserData()
    {
        return json_encode(Auth::user());
    }
}
