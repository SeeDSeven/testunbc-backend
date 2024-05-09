<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function execute(Request $request)
    {
        $users = User::all();
        return response()->json($users);
    }
}
