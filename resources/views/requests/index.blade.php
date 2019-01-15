@extends('template.content')

@section('main')

    @foreach($friendRequest as $request)

       {{-- {{$user}} --}}

       <div class="post-feed content-container">
            <div class="post-feed-header" style="{{is_null($user->description) ? 'margin-bottom:0px;padding-bottom:0px;border-bottom:none;' : 'border-bottom: 1px solid #e6e6e6;'}}">
                <div class="post-user" style="width:100%;">
                    <img src="{{asset('img/avatars/' . $user->avatar)}}" alt="" class="profil-img profil-img-friend-request">
                    
                    <p class="post-information-name"> <a href="{{action('UserController@show', $user->id)}}"> {{$user->first_name . ' ' . substr($user->last_name, 0, 1) . '.'}}</a></p>
                    
                    {!! Form::open(['style' => 'display: inline-block;float: right;']) !!}
                        
                        {!! Form::hidden('requester', $user->id) !!}
                        
                        <button class="profil-contact-btn" style="margin-top:10px;font-size:13px;font-weight:600;float:none;" name="accept"> <span>{{-- request's icon --}}</span>Accepter</button>
                        <button class="profil-contact-btn" style="margin-top:10px;font-size:13px;font-weight:600;float:none;" name="refuse"> <span>{{-- request's icon --}}</span>Refuser</button>
                    {!! Form::close() !!}
                    
                   
                </div>
            </div>
            @if($user->description)
                <div class="post-feed-content">
                    <h4 class="post-title" style="font-weight:bold;">Description</h4> 
                    <p>{{$user->description}}</p>
                </div>
            @endif
        </div>
    @endforeach
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>''])
@endsection