@extends('layouts.app')

@section('content')

<div class="register-wrapper">
    <div class="register-buttons-container">
        {{-- <a href="{{ URL::previous() }}"> --}}
            <button>Retour</button>
        {{-- </a> --}}
        {{-- <a href=""> --}}
            <button>Se connecter</button>
        {{-- </a> --}}
    </div>
    <div class="register-container">
        <div class="register-header">
            <div class="register-title">
                <h1>Bienvenue !</h1>
                <p> - Inscription</p>
            </div>
            <img src="{{asset('img/logo/logo.png')}}" alt="escaip">
        </div>
        <div class="register-body">
                @if($errors->has('content'))
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            @endif
                {!! Form::open( ['uri' => 'register', 'files' => true, ]) !!}
                {{--  @csrf  --}}
                <div class="register-input-container">
                    {!! Form::label('firstName', 'Prénom') !!}
                    {!! Form::text('firstName', null) !!}
                </div>
                <div class="register-input-container">
                    {!! Form::label('lastName', 'Nom') !!}
                    {!! Form::text('lastName', null) !!}
                </div>
                <div class="register-input-container">
                    {!! Form::label('userName', 'Pseudo') !!}
                    {!! Form::text('userName', null) !!}
                </div>
                <div class="register-input-container">
                    {!! Form::label('email', 'Adresse Courriel') !!}
                    {!! Form::email('email', null) !!}
                </div>
                <div class="register-more-infos">
                    <div class="register-input-container">
                        {!! Form::label('sexe', 'Sexe', ['class'=>'more-infos-label']) !!}
                        <div class="checkbox-container">
                            {!! Form::label('male', 'Homme', ['checkbox-label']) !!}
                            {!! Form::checkbox('male', 1) !!}
                        </div>
                        <div class="checkbox-container">
                            {!! Form::label('female', 'Femme', ['checkbox-label']) !!}
                            {!! Form::checkbox('female', 2) !!}
                        </div>
                        <div class="checkbox-container">
                            {!! Form::label('notDefined', 'Indéfini', ['checkbox-label']) !!}
                            {!! Form::checkbox('notDefined', 3) !!}
                        </div>
                    </div>
                    <div class="register-input-container">
                            {!! Form::label('school', 'École') !!}
                            {!! Form::select("school", $school->pluck('name'), ['id' => 'name']) !!}
                    </div>
                </div>
                <div class="register-password-container">
                    <div class="register-input-container">
                        <label for="password" >{{ __('Mot de passe') }}</label>
                        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>
                    <div class="register-input-container">
                        <label for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>
                        <input id="password-confirm" type="password"  name="password_confirmation" required>
                    </div>
                </div>
                <div class="register-footer">
                        <button>Sinscrire</button>
                    </div>
            {!! Form::close() !!}
        </div>
        <div class="register-footer">
            <button>Sinscrire</button>
        </div>
    </div>
</div>
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if($errors->has('content'))
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    @endif

                      {!! Form::open( ['uri' => 'register', 'files' => true, ]) !!}
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom')  }}</label> --}}
                            
                            {!! Form::label('firstName', 'Prénom', ["class"=>"col-md-4 col-form-label text-md-right"]) !!}
                            

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> --}}
                                
                                {!! Form::text('firstName', null) !!}
                                
                                {{-- @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom')  }}</label> --}}
                            
                            {!! Form::label('lastName', 'Nom', ["class"=>"col-md-4 col-form-label text-md-right"]) !!}
                            

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> --}}
                                
                                {!! Form::text('lastName', null) !!}
                                
                                {{-- @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom')  }}</label> --}}
                            
                            {!! Form::label('userName', 'Pseudo', ["class"=>"col-md-4 col-form-label text-md-right"]) !!}
                            

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> --}}
                                
                                {!! Form::text('userName', null) !!}
                                
                                {{-- @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                     

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                            
                            {!! Form::label('email', 'Adresse Courriel', ["class"=>"col-md-4 col-form-label text-md-right"]) !!}
                            

                            <div class="col-md-6">
                                {{-- <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> --}}
                                
                                {!! Form::email('email', null) !!}
                                
                                {{-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom')  }}</label> --}}
                            
                            {!! Form::label('avatar', 'Avatar', ["class"=>"col-md-4 col-form-label text-md-right"]) !!}
                            

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> --}}
                                
                                {!! Form::file('avatar') !!}
                                
                                {{-- @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
