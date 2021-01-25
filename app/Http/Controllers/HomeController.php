<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\TestMiddleware;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(TestMiddleware::class);
//    }

    public function __construct()
    {
        $this->middleware('test');
    }

    public function test()
    {
        return redirect('/post/access');
    }
}


