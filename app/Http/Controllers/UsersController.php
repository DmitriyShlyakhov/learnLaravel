<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            '0' => [
                'first_name' => 'Dima',
                'last_name' => 'Shlyakhov',
                'location' => 'Ukraine'
            ],
            '1' => [
                'first_name' => 'Jessica',
                'last_name' => 'Alba',
                'location' => 'USA'
            ]
        ];
        return view('admin.users.index', compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        User::create($request->all());
        return 'success';
//        return $request->all();
    }
}
