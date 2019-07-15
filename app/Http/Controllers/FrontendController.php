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
    public function front()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();

        return view('frontend.front', compact('artikel'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function archive()
    {
        return view('frontend.archive');
    }

    public function blog()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.blog', compact('artikel', 'kategori', 'tag'));
    }

    public function singleblog(Artikel $artikel)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.single-post', compact('artikel', 'kategori', 'tag'));
    }


    public function blogtag(Tag $tag)
    {
        $artikel = $tag->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.blog', compact('artikel', 'kategori', 'tag'));
    }

    public function blogkategori(Kategori $kategori)
    {
        $artikel = $kategori->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.blog', compact('artikel', 'kategori', 'tag'));
    }

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
        $artikel = Artikel::take(4)->get();
        $tag = Tag::all();
        $kategori = Kategori::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function kategori()
    {
        $kategori = Kategori::take(3)->get();
        $tag = Tag::all();
        $artikel = Artikel::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function tag()
    {
        $kategori = Tag::take(3)->get();
        $tag = Kategori::all();
        $artikel = Artikel::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }
}
