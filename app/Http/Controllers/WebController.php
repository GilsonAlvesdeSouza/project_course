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
        $head = $this->seo->render(
            env('APP_NAME') . ' Blog Upinside',
            'Curso completo de Laravel Developer',
            route('home'),
            asset('images/img_bg_1.jpg')
        );
        return view('front.home', [
            'head' => $head,
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
        $head = $this->seo->render(
            env('APP_NAME') . ' Artigos UpInside',
            'Curso completo de Laravel Developer',
            route('article'),
            asset('images/img_bg_1.jpg')
        );
        return view('front.article', [
            'head' => $head,
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
