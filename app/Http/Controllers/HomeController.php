<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pageView($routeName, $page = null)
    {
        $viewName = ($page) ? $routeName . '.' . $page : $routeName;

        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            abort(404);
        }
    }
}
