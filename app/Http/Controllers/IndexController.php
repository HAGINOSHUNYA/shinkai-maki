<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;//サイトマップ

class IndexController extends Controller
{
    //
    public function index(){
        return view('index');

    }
    public function sitemap()
    {
        // サイトマップを生成してXML形式で返す
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . route('index') . '</loc>';
        $sitemap .= '</url>';
        // 他のページのURLを追加する場合は同様に繰り返し追加

        $sitemap .= '</urlset>';

        return Response::make($sitemap, 200, ['Content-Type' => 'application/xml']);
    }
}
