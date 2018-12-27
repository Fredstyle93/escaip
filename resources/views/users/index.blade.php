@extends('layouts.app')

@section('content')

    <h1>Utilisateurs</h1>    
    <br>
    <ul>
        @foreach ($users as $user)
         <a href="{{route('user.show',$user->id)}}">   <li>{{$user->firstName}}</li></a>
        @endforeach
    </ul>
@endsection