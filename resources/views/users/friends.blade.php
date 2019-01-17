@extends('template.content')

@section('main')

    <div class="row">
        @foreach($friendlist as $friend)

        {{ $friend }}
        @endforeach
        <div class="col-md-6">

        </div>

    </div>

@endsection
@section('sidebar')
    @include('template.sidebar', ['tab' => 'profile'])
@endsection
