<!doctype html>
<html lang="en">

@include('template.head')


<body>
    <!-- --------------------------------- NAV BAR --------------------------------- -->

    @include('template.navbar')
    {{-- @if (Route::getCurrentRoute()->uri() == '/' && Auth::guest())
        <header class="header home">
            <div class="header-image">

            </div>
        </header>
    @endif --}}
    @guest()
            @if(Route::current()->uri() == '/' )
                <header class="header home">
                    <div class="header-image">
                        <div class="l-container">
                            <div class="fast-register">
                                <div class="fast-register-header">
                                    <h2 class="fast-register-title">
                                        Inscription simple, facile et gratuite !
                                    </h2>
                                </div>
                                <div class="fast-register-body">
                                    
                                    {!! Form::open(['uri' => 'register', 'class'=>'fast-register-form']) !!}
                                        <div class="register-input-container">
                                            {!! Form::label('email', 'Adresse email') !!}
                                            {!! Form::text('email', null) !!}
                                        </div>
                                        <div class="register-input-container">
                                            {!! Form::label('password', 'Mot de passe') !!}
                                            {!! Form::password('password', null, ['required'=>true]) !!}
                                        </div>
                                        <div class="register-input-container">
                                            {!! Form::label('password-confirm', 'Confirmer le mot de passe') !!}
                                            {!! Form::password('password_confirmation', null, ['required'=>true]) !!}
                                            
                                        </div>

                                        <button> Enregistrer </button>
                                    {!! Form::close() !!}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            @endif
         @endguest
    <!-- --------------------------------- TOGGLE NAVIGATION --------------------------------- -->
    
    @include('template.toggle-navigation')
    <div class="hide"></div>

    <!-- --------------------------------- CONTENT --------------------------------- -->
    
    <div class="content">
        <div class="l-container" style="margin-top: 100px;">
            
            <!-- --------------------------------- ARIANE --------------------------------- -->
            {{--  <div class="ariane row">
                <ul class="ariane-list col-12 col-lg-9 offset-lg-3">
                    <span class="ariane-list-nomPage">Catégorie </span>
                </ul>
            </div>  --}}
            <div class="row">
                <!-- --------------------------------- MAIN --------------------------------- -->
                
                @yield('content')
            </div>
        </div>
    </div>
    @include('template.footer')

    <script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js')}}" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('js/front/calendar.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('js/front/burgerMenu.js')}}"></script> 
    <script type="text/javascript" src="{{asset('js/front/navbar-subnav.js')}}"></script> 
    <script type="text/javascript" src="{{asset('js/front/newPost.js')}}"></script>

</body>
</html>
