@extends('template.content')

@section('main')
    @include('projects.create')
    @include('users.index')
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>'welcome'])
@endsection

