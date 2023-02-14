<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Controller;

class AuthorizationConttroller extends Controller
{
    public function index(){
        Gate::allows('isAdmin')?Response::allow():abort(403);
        return "Autorizations";
    }
}
