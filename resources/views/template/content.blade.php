@extends('layouts.app')

@section('content')
    <!-- --------------------------------- SIDEBAR --------------------------------- -->
    
    <div class="sidebar col-lg-3 ">
        @yield('sidebar')
    </div>
    <!-- --------------------------------- MAIN --------------------------------- -->
    <div class="wrapper col-12 col-lg-9 offset-lg-3">
        @guest()
            @if(Route::current()->uri() == '/' )
                <header class="header home">
                    <div class="header-image">
                        <div class="fast-register">
                            <div class="fast-register-header">
                                <h2 class="fast-register-title">
                                    Inscription simple, facile et gratuite !
                                </h2>
                            </div>
                        </div>
                        <div class="fast-register-body">
                            
                            {!! Form::open(['uri' => 'register', 'class'=>'fast-register-form']) !!}
                                <div class="input-container">
                                    {!! Form::label('email', 'Adresse email') !!}
                                    {!! Form::text('email', null) !!}
                                </div>
                                <div class="input-container">
                                    {!! Form::label('password', 'Mot de passe') !!}
                                    {!! Form::password('password', null, ['required'=>true]) !!}
                                </div>
                                <div class="input-container">
                                    {!! Form::label('password-confirm', 'Adresse password-confirm') !!}
                                    {!! Form::password('password_confirmation', null, ['required'=>true]) !!}
                                    
                                </div>
                            {!! Form::close() !!}
                            
                        </div>
                    </div>
                </header>
            @endif
         @endguest
        @yield('main') 
    </div>
@endsection