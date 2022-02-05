<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Menu;

class DashboardController extends Controller
{
    public function index(Request $request){

        return view('pages.admin.dashboard',[
            'artikel' => Artikel::count(),
            'menu' => Menu::count()
        ]
    );
    }
}
