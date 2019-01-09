@extends('template.content')
@section('main')
<div class="categories row">
    {{--  <h2 class="categories-title col-12">Que voulez-vous apprendre?</h2>  --}}
    @foreach ($categories as $category)
        <div class="categories-items category-{{$category->slug}} col-12 col-md-6 col-lg-4">
            <a href="{{route('category.show', $category)}}">
                <div class="categories-items-container row">
                    <div class="categories-items-image-wrapper col-5 col-lg-12">
                        <img src="img/categories/{{$category->image}}" class="categories-image" alt="">
                    </div>
                    <div class="categories-items-title title-{{$category->slug}} col-7 col-lg-12">
                        <h4>{{$category->title}}</h4>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>'portfolios'])    
@endsection