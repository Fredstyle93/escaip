@extends('template.content')
@section('content')


    {!! Form::model($user, ['method'=>'put', 'files' => true]) !!}

        <div class="content-container profil">
            <div class="profil-header">
                <div class="profil-header-img">

                </div>

                <div class="profil-container">
                    <div class="profil-container-image">
                        <img src="{{asset('img/avatars/' . $user->avatar)}}" alt="{{$user->name}}" class="profil-image">
                    </div>
                    <div class="profil-infos ">
                        
                        {!! Form::file('avatar') !!}
                        
                        {!! Form::text('first_name', $user->first_name) !!}
                        {!! Form::text('last_name', $user->last_name) !!}
                        
                        {{--  <h2 class="profil-name">{{$user->first_name." ".$user->last_name}}</h2>  --}}

                    </div>
                    {{--  <button class="profil-contact-btn"> <span class="sprite sprite-profil-message"></span> Contacter</button>  --}}
                </div>
            </div>

            <div class="profil-details row">
                <ul class="profil-details-list col-6 col-lg-6">
                    <li class="details-elements">
                        <h4>{!! Form::label('school_id', 'Cégep') !!}</h4>                 
                        {!! Form::select('school_id', $schools, $user->school_id) !!}
                    </li>
                    <li class="details-elements"> 
                        <h4>Compétences </h4>
                        {!! Form::select('skills[]', App\Skill::pluck('name', 'id'), $user->skills->pluck('id'), ['multiple' => 'true', 'id' => '#demo']) !!}
                    </li>
                </ul>
                <ul class="profil-stats-list col-6 col-lg-6">
                    <li class="stats-elements">
                        <div class="stats-number"><p>{{$user->posts->count()}}</p></div> <p class="stats-name">publications</p>
                    </li>
                    <li class="stats-elements">
                        <div class="stats-number"><p>12x</p></div><p class="stats-name">venu en aide</p>
                    </li>
                    <li class="stats-elements">
                        <div class="stats-number"><p>208</p></div><p class="stats-name">interractions</p>
                    </li>
                </ul>
            </div>
            <div class="profil-description ">
                <h4>Description</h4>
                
                {!! Form::textarea('description', $user->description) !!}
                
            </div>
            <button class="profil-contact-btn">Modifier</button>
        </div>
            
        
    {!! Form::close() !!}

    {{--  <script>
        var secondElement = new Choices('#demo', { allowSearch: false }).setValue(['Set value 1', 'Set value 2']);
    </script>  --}}
    
@endsection

{{--  @section('sidebar')
    @include('template.sidebar')
@endsection  --}}