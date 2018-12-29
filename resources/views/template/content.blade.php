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
    
                    </div>
                </header>
            @endif
         @endguest
        @yield('main') 
    </div>
@endsection