@extends('template.content')

@section('main')
    <div class="content-container row">
        <div class="content-grid col-12 col-sm-6 col-md-4 col-xl-3">
            <a href="article.html" class="article-link">
                <div class="content-article article-image">
                    <div class="article-bg-title">
                        <p class="article-title">
                            Titre du projet
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>'welcome'])
@endsection