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
    <!-- --------------------------------- TOGGLE NAVIGATION --------------------------------- -->
    
    @include('template.toggle-navigation')
    <div class="hide"></div>

    <!-- --------------------------------- CONTENT --------------------------------- -->
    @include('template.sidebar', ['tab'=>'welcome'])
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

</body>
</html>
