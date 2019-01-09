@extends('template.content')

@section('main')
    <div class="new-post content-container">
        <div class="new-post-information">
            @auth
                <img src="img/users/user03.jpg" alt="" class="profil-img">
            @endauth
            <p class="new-post-title">{{$category->title}} - <span style="font-weight:400;"> {{$category->projects->count()}} projets publiés </span></p>
        </div>
        @auth
            <div class="new-post-type">
                <span class="sprite sprite-postType-learning post-learning-button"></span>
            </div>
        @endauth
    </div>
    <div class="content-container row">
        @foreach ($category->projects as $project)
            <div class="content-grid col-12 col-sm-6 col-md-4 col-xl-3">
                <a href="{{route('project.show', $project)}}" class="article-link">
                    <div class="content-article article-image">
                        <div class="article-bg-title">
                            <p class="article-title">
                                {{$project->title}}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab' => 'portfolios'])
@endsection