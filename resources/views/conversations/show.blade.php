@extends('template.content')
@section('main')
<div class="row">


@include('conversations.users',['users'=>$users, 'unread'=> $unread])

    <div class="col-md-9 card">
        <div class="card-header">
        {{ $user->firstName }}
        </div>

    <div class="card-body conversations">
            @if($messages->hasMorePages())
            <div class="text-center">
                <a class="btn btn-light" href="{{ $messages->nextPageUrl() }}">
                    voir les messages précédents
                </a>
            </div>
            @endif


        @foreach(array_reverse($messages->items()) as $message)


        <div class="row">
                <div class="col-md-10 {{$message->from->id !== $user->id ? 'offset-md-2 text-right': ' '}}">

                        <p>
                        <strong>
                        {{$message->from->id !== $user->id ? 'Moi' :  $message->from->firstName}}
                        </strong>
                        <br>
                        {!! nl2br(e($message->content)) !!}

            </p>

            </div>
        </div>
        <br>
        <hr>
        @endforeach

        @if($messages->previousPageUrl())
        <div class="text-center">
            <a class="btn btn-light" href="{{ $messages->previousPageUrl() }}">
                voir les messages suivants
            </a>
        </div>
        <br>
        @endif
<form action="" method="POST">
  {{ csrf_field() }}

  <div class="form-group">
    <textarea name="content" placeholder="écrivez votre message" class="form-control"></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Envoyer</button>
</form>
    </div>
</div>

</div>
@endsection
@section('sidebar')
    @include('template.sidebar', ['tab'=>'portfolios'])
@endsection
