<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    /**
     * Here Is Store Function For Session
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        if ($request->theme == 'theme-one') {

            Session::put('theme', $request->theme);

        }elseif($request->theme == 'theme-two'){

            Session::put('theme', $request->theme);

        }

        return view('form.index');

    }
}
