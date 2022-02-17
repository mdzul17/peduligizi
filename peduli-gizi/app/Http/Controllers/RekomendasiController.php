<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function index(Request $request){
        $items = Menu::get();
        return view('pages.menu',[
            'items' => $items
        ]);
    }

    public function detail(Request $request, $id){
        $item = Menu::where('id', $id)->firstOrFail();
        return view('pages.dtl_menu',[
            'item' => $item
        ]);
    }

    public function hitung(Request $request){
        $usia = $request->input('usia');
        $tbadan = $request->input('tbadan');
        $bbadan = $request->input('bbadan');
        $jkelamin = $request->input('jkelamin');
        $jmlkalori = 0;

        if($jkelamin=='laki-laki'){
            $jmlkalori = ( 88.4 + 13.4 * $bbadan) + (4.8 * $tbadan) - (5.68 * $usia) * 1.5; 
        }else{
            $jmlkalori = (447.6 + 9.25 * $bbadan) + (3.1 * $tbadan) - (4.33 * $usia) * 1.5; 
        }

        $ataskalori = $jmlkalori + 100;
        $bawahkalori = $jmlkalori - 100;

        $items = Menu::where('kalori', '<', $ataskalori)->where('kalori', '>', $bawahkalori)->get();
        return view('pages.menu',[
            'items' => $items
        ]);
    }
}
