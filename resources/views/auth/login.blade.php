@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-buttons-container">
        {{-- <a href="{{ URL::previous() }}"> --}}
            <button>Retour</button>
        {{-- </a> --}}
        {{-- <a href=""> --}}
            <button>Sinscrire</button>
        {{-- </a> --}}
    </div>
    <div class="login-container">
        <div class="login-header">
            <div class="login-title">
                <p>Connexion</p>
            </div>
            <img src="{{asset('img/logo/logo.png')}}" alt="escaip">
        </div>
        <div class="login-body">
            
            {!! Form::open(['uri' => 'login']) !!}
            <div class="login-input-container">
                {!! Form::label('email', 'Adresse e-mail') !!}
                {!! Form::text('email', null) !!}
            </div>
            <div class="login-input-container">
                {!! Form::label('password', 'Mot de passe') !!}
                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            </div>
            <div class="register-footer">
                    <button>Se connecter</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
