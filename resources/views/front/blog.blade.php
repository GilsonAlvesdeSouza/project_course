@extends('front.master.master')

@section('content')

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
            style="background-image:url(front/assets/images/img_bg_2.jpg); height: 200px"
            data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </header>

    @isset($post)
        <div id="fh5co-blog">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Artigos Recentes</h2>
                        <p>Confira aqui nossos últimos artigos e video aulas!<br>Conteúdo exclusivo sobre o Laravel
                            FrameWork.</p>
                    </div>
                </div>
                <div class="row">


                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="{{ asset(\LaraCurso\Suporte\Cropper::thumb($post->cover, 800, 450)) }}"><img
                                        class="img-responsive"
                                        src="{{ asset(\LaraCurso\Suporte\Cropper::thumb($post->cover, 800, 450)) }}"
                                        alt=""></a>
                                <div class="blog-text">
                                    <h3><a href="{{ route('article', $post->uri) }}" #>{{ $post->title }}</a></h3>
                                    <span class="posted_on">{{ date('d/m/Y H:i', strtotime($post->created_at)) }}</span>
                                    <span class="comment"><a href="#">21<i class="icon-speech-bubble"></i></a></span>
                                    <p>{{ $post->subtitle }}</p>
                                    <a href="{{ route('article', $post->uri) }}" class="btn btn-primary">Leia mais</a>
                                </div>
                            </div>
                        </div>

                        @if(($loop->index + 1) % 3 === 0)
                            <div style="width: 100%; float: left; height: 1px;"></div>
                        @endif

                    @endforeach

                    @endisset

{{--                    <div class="col-lg-4 col-md-4">--}}
{{--                        <div class="fh5co-blog animate-box">--}}
{{--                            <a href="#"><img class="img-responsive" src="front/assets/images/project-1.jpg" alt=""></a>--}}
{{--                            <div class="blog-text">--}}
{{--                                <h3><a href="" #>45 Minimal Worksspace Rooms for Web Savvys</a></h3>--}}
{{--                                <span class="posted_on">Nov. 15th</span>--}}
{{--                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>--}}
{{--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and--}}
{{--                                    Consonantia,--}}
{{--                                    there live the blind texts.</p>--}}
{{--                                <a href="#" class="btn btn-primary">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-4">--}}
{{--                        <div class="fh5co-blog animate-box">--}}
{{--                            <a href="#"><img class="img-responsive" src="front/assets/images/project-5.jpg" alt=""></a>--}}
{{--                            <div class="blog-text">--}}
{{--                                <h3><a href="" #>45 Minimal Worksspace Rooms for Web Savvys</a></h3>--}}
{{--                                <span class="posted_on">Nov. 15th</span>--}}
{{--                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>--}}
{{--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and--}}
{{--                                    Consonantia,--}}
{{--                                    there live the blind texts.</p>--}}
{{--                                <a href="#" class="btn btn-primary">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-4">--}}
{{--                        <div class="fh5co-blog animate-box">--}}
{{--                            <a href="#"><img class="img-responsive" src="front/assets/images/project-6.jpg" alt=""></a>--}}
{{--                            <div class="blog-text">--}}
{{--                                <h3><a href="" #>45 Minimal Worksspace Rooms for Web Savvys</a></h3>--}}
{{--                                <span class="posted_on">Nov. 15th</span>--}}
{{--                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>--}}
{{--                                <p>Far far away, behind the word mountains, far from the countries Vokalia and--}}
{{--                                    Consonantia,--}}
{{--                                    there live the blind texts.</p>--}}
{{--                                <a href="#" class="btn btn-primary">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div style="width: 100%; float: left; height: 1px;"></div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        @include('front.includes.optin')

@endsection
