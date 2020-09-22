<?php

namespace LaraCurso\Http\Controllers;

use Illuminate\Http\Request;
use LaraCurso\Model\Post;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' UpInside Treinamentos',
            'Curso completo de Laravel Developer',
            url('/'),
            asset('images/img_bg_1.jpg')
        );
        return view('front.home', [
            'head' => $head,
            'posts' => $posts,
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'asc')->get();
        $head = $this->seo->render(
            env('APP_NAME') . ' Blog Upinside',
            'Curso completo de Laravel Developer',
            route('home'),
            asset('images/img_bg_1.jpg')
        );
        return view('front.home', [
            'head' => $head,
            'posts' => $posts,
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' Cursos',
            'Curso completo de Laravel Developer',
            route('course'),
            asset('images/img_bg_1.jpg')
        );
        return view('front.course', [
            'head' => $head,
        ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();
        $head = $this->seo->render(
            env('APP_NAME') . ' Artigos UpInside',
            'Curso completo de Laravel Developer',
            route('article', $post->uri),
            asset(\LaraCurso\Suporte\Cropper::thumb($post->cover, 1200, 628))
        );
        return view('front.article', [
            'head' => $head,
            'post' => $post,
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' Contato UpInside',
            'Curso completo de Laravel Developer',
            route('contact'),
            asset('images/img_bg_1.jpg')
        );
        return view('front.contact', [
            'head' => $head,
        ]);
    }
}
