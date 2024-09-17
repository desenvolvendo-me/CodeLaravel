<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $message = "Hello World!";

        if ($request->wantsJson()) {
            return response()->json(['message' => $message]);
        } else {
            return view('hello', ['message' => $message]);
        }
    }
}
