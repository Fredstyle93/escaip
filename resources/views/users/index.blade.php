@extends('app.layouts')

@section('content')

    <h1>Utilisateurs</h1>    
    <ul>
        @foreach ($users as $user)
            <li>$user->name</li>
        @endforeach
    </ul>
@endsection