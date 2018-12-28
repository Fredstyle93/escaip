@extends('template.content')

@section('main')
    <h1>salut</h1>
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>'welcome'])
@endsection