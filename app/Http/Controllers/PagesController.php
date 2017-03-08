<?php

namespace App\Http\Controllers;

//use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index(){
        if (View::exists('pages.index')){
//            return view('pages.index', ['text' => '<b>Laravel</b>']);
            return view('pages.index')
                ->with('text', '<b>Laravel</b>')
                ->with('name', 'Nicole');
        } else{
            return'This view not available';
        }
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function blade(){
        return view('blade.bladetest');
    }
}
