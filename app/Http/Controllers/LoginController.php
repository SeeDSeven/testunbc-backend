<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        try{
            $proxy = Request::create('/oauth/token', 'POST');

            return Route::dispatch($proxy);
        }
        catch(Exception $e){
            return Response::json(['error' => $e->getMessage()], 400);
        }
    }
}
