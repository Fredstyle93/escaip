@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{asset('../bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">

    {!! Form::model($user, ['method'=>'put', 'files' => true, 'route' =>['user.update', $user->id]]) !!}

        <div class="content-container profil">
            <div class="profil-header">
                <div class="profil-header-img">

                </div>

                <div class="profil-container">
                    <div class="profil-container-image">
                        <img src="{{asset('img/avatars/' . $user->avatar)}}.jpg" alt="{{$user->name}}" class="profil-image">
                    </div>
                    <div class="profil-infos ">
                        
                        <i class="fas fa-cog">
                        {!! Form::file('avatar',["class"=>"hidden"]) !!}
                         </i>
                        {!! Form::text('firstName', $user->firstName) !!}
                        {!! Form::text('lastName', $user->lastName) !!}
                        
                         <h2 class="profil-name">{{$user->firstName." ".$user->lastName}}</h2> 

                    </div>
                     {{-- <button class="profil-contact-btn"> <span class="sprite sprite-profil-message"></span> Contacter</button>  --}}
                </div>
            </div>

            <div class="profil-details row">
                <ul class="profil-details-list col-6 col-lg-6">
                    <li class="details-elements">
                       <h4>{!! Form::label('school', 'Cégep') !!}</h4>  
                                   
                         {!! Form::select("school", $school->pluck('name'), ['id' => 'name']) !!}
                    </li>
                    <li class="details-elements "> 
                        <h4>Compétences </h4>
                        <div class="row">
                            <div  class="col-6 checkBox">
                                {{Form::checkbox('checkbox[]', 1,false,["class" => "form-group"])}}
                                
                                {{Form::checkbox('checkbox[]', 2,false,["class" => "form-group"])}}
                               
                                {{Form::checkbox('checkbox[]', 3,false,["class" => "form-group"])}}
                                
                                {{Form::checkbox('checkbox[]', 4,false,["class" => "form-group"])}}
                               
                                {{Form::checkbox('checkbox[]', 5,false,["class" => "form-group"])}}


                            </div>
                            <div class="col-6 checkbox-grp">
                                    {{Form::label('checkBox', 'Programmation')}}
                                    {{Form::label('checkBox', 'Photoshop')}}
                                   {{Form::label('checkBox', 'Design Web')}}
                                    {{Form::label('checkBox', 'Edition video')}}
                                    {{Form::label('checkBox', 'Music')}}
                            </div>

                        </div>
           
                        {{-- {!! Form::select('skills[]', App\Skill::pluck('name', 'id'), $user->skills->pluck('id'), ['multiple' => 'true', 'id' => '#demo']) !!} --}}
                    </li>
                </ul>
                <ul class="profil-stats-list col-6 col-lg-6">
                    <li class="stats-elements">
                        <div class="stats-number"><p>{{$user->posts}}</p></div> <p class="stats-name">publications</p>
                    </li>
                    <li class="stats-elements">
                        <div class="stats-number"><p>{{$user->helps}}x</p></div><p class="stats-name">venu en aide</p>
                    </li>
                    <li class="stats-elements">
                        <div class="stats-number"><p>{{$user->interactions}}</p></div><p class="stats-name">interractions</p>
                    </li>
                </ul>
            </div>
            <div class="row">
            <div class="profil-description">
                <h4>Description</h4>
                
                {!! Form::textarea('description', $user->description, ['class'=>"col-md-12"]) !!}
                
            </div>
        </div>

            {{Form::submit("Modifier", ["class"=>"profil-contact-btn"])}}
            {{-- <button type="submit" class="profil-contact-btn">Modifier</button> --}}
        </div>
            
        
    {!! Form::close() !!}

    {{--  <script>
        var secondElement = new Choices('#demo', { allowSearch: false }).setValue(['Set value 1', 'Set value 2']);
    </script>  --}}
    
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>'welcome'])
@endsection