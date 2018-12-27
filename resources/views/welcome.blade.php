@extends('layouts.app')

@section('content')
    <h1>salut</h1>
    @foreach ($users as $user)
        {{$user->firstName}}
    @endforeach
@endsection