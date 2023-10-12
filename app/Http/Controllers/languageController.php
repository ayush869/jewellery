<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class languageController extends Controller
{
    public function index()
    {
        return view('language.lang');
    }
    public function change(Request $request)
    {
        $lang = "lang";
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
    public function lang_change($lang)
    {
        // if (array_key_exists($lang, config('app.locales'))) {
            app()->setLocale($lang);
            session()->put('locale', $lang);
            return redirect()->back();
        // }
    }

    public function lang_index()
    {
        return view('language.lang2');
    }
}
