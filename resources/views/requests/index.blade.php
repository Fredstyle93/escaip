@extends('template.content')

@section('main')

    @foreach($friendRequest as $request)

       {{-- {{$user}} --}}
        {{--  {{$request->user}}  --}}
        
       <div class="post-feed content-container">
            <div class="post-feed-header" style="{{is_null(App\User::find($request->sender_id)->description) ? 'margin-bottom:0px;padding-bottom:0px;border-bottom:none;' : 'border-bottom: 1px solid #e6e6e6;'}}">
                <div class="post-user" style="width:100%;">
                    <img src="{{asset('img/avatars/' . App\User::find($request->sender_id)->avatar)}}" alt="" class="profil-img profil-img-friend-request">
                    
                    <p class="post-information-name"> <a href="{{action('UserController@show', App\User::find($request->sender_id)->id)}}"> {{App\User::find($request->sender_id)->firstName . ' ' . substr(App\User::find($request->sender_id)->lastName, 0, 1) . '.'}}</a></p>
                    
                    {!! Form::open(['style' => 'display: inline-block;float: right;']) !!}
                        
                        {!! Form::hidden('sender', $request) !!}
                        
                        <button class="profil-contact-btn" style="margin-top:10px;font-size:13px;font-weight:600;float:none;" name="accept"> <span></span>Accepter</button>
                        <button class="profil-contact-btn" style="margin-top:10px;font-size:13px;font-weight:600;float:none;" name="refuse"> <span></span>Refuser</button>
                    {!! Form::close() !!}
                    
                   
                </div>
            </div>
            @if(App\User::find($request->sender_id)->description)
                <div class="post-feed-content">
                    <h4 class="post-title" style="font-weight:bold;">Description</h4> 
                    <p>{{App\User::find($request->sender_id)->description}}</p>
                </div>
            @endif
        </div>
    @endforeach
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>''])
@endsection