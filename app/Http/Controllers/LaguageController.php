<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaguageController extends Controller
{


    public function languageSwitch($language){
        session(['APP_LOCALE' => $language]);
        return redirect()->back();
    }
}
