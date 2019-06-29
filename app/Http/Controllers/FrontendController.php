<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Artikel;
use App\Kategori;
use App\User;


class FrontendController extends Controller
{
    public function index()
    {
        $menu = Kategori::take(3)->get();
        $top = Article::where('headline', 0)->orderBy('created_at', 'desc')->take(5)->get();
        $headline = Article::where('headline', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $article = Article::select('articles.title', 'articles.slug', 'headline', 'image', 'categories.title as categories', 'users.name as author')
            ->join('users', 'users.id', '=', 'articles.user_id')
            ->join('categories', 'categories.id', '=', 'articles.category_id')
            ->paginate(2);
        $trending = Article::inRandomOrder()->take(3)->get();
        $latest = Article::orderBy('created_at', 'desc')->take(4)->get();

        $response = [
            'success' => true,
            'data' => ['menu' => $menu, 'top' => $top, 'headline' => $headline, 'article' => $article, 'trending' => $trending, 'latest' => $latest],
            'message' => 'Berhasil.'
        ];

        return response()->json($response, 200);
    }

    public function most()
    {
        $artikel = Artikel::take(3)->get();
        $tag = Tag::all();
        $kategori = Kategori::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function trending()
    {
        $artikel = Artikel::take(1)->get();
        $tag = Tag::all();
        $kategori = Kategori::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }
}
