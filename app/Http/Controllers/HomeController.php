<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $request;
    protected $post;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, Post $post)
    {
        $this->post    = $post;
        $this->request = $request;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'posts' => $this->post->published()
                ->orderBy('id', 'dec')
                ->paginate(5),
        ]);
    }

    public function show($url)
    {
        $post = $this->post->where('slug', '=', $url)
            ->published()
            ->first();
        $prev = $this->post->where('id', '<', $post->id)
            ->published()
            ->orderBy('id', 'dec')
            ->first();
        $next = $this->post->where('id', '>', $post->id)
            ->published()
            ->orderBy('id', 'dec')
            ->first();

        return view('post', [
            'post' => $post,
            'prev' => $prev,
            'next' => $next,
        ]);
    }
}
