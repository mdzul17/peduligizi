<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        $items = Artikel::get();
        return view('pages.article',[
            'items' => $items
        ]);
    }

    public function detail(Request $request, $id){
        $item = Artikel::where('id', $id)->firstOrFail();
        return view('pages.dtl_article',[
            'item' => $item
        ]);
    }
}
