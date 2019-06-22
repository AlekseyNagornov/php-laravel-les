<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function getAboutPage(Request $request){
        return view('about', [
            'title' => 'О нас',
            'users' => [
                'User1',
                'User2',
                'User3'
            ]
        ]);
    }
}
