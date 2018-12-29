<div class="navbar">
        <div class="l-container">
            <div class="navbar-logo" style="{{Auth::user() ? 'margin-top: 11px;' : ''}}">
                <a href="{{route('home')}}">
                    <img src="{{asset('img/logo/logo.png')}}" class="logo" alt="nomSite">
                </a>
            </div>
    
            
            <div class="navbar-menu">
                @guest()
                    <nav class="navbar-menu-guest">
                        <a href="{{ route('register') }}" class="navbar-menu-items ">Sinscrire</a>
                        <a href="{{ route('login') }}" class="navbar-menu-items">Se connecter</a>
                    </nav>
                @else
                    <nav class="navbar-menu-log" id="click">
                        <img src="{{asset('img/avatars/' . Auth::user()->avatar)}}" alt="{{Auth::user()->firstName}}" class="profil-img profil-img-navbar">
                        <div class="navbar-arrow"></div>
                    </nav>
                @endguest
                <div class="subnav" >
                    <nav class="subnav-nav">
                        <ul class="subnav-list">
                            @if(Auth::user() && Auth::user()->level >= 2)
                                {{-- <a href="{{route('admin')}}">  --}}
                                    <li class="subnav-list-items"> Menu Admin </li>
                                {{-- </a> --}}
                            @endif
                            {{-- <a href="{{route('requests')}}"><li class="subnav-list-items"><span></span>Demandes de contact</li></a> --}}
                            <a><li class="subnav-list-items"><span></span>Aide</li></a>
                            @if(Auth::check())
                            <a href="{{route('user.show',auth::user()->id)}}"><li class="subnav-list-items"> Mon profil</li></a>
                            @endif
                                <a ><li class="subnav-list-items"><span></span>Paramètre</li></a>
                            <a><li class="subnav-list-items"><span></span>Nous contacter</li></a>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <li class="subnav-list-items"><span></span>Se déconnecter</li>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </nav>
                </div>
                <div class="burger-menu">
                    <span class="burger-menu-bar"></span>
                    <span class="burger-menu-bar"></span>
                    <span class="burger-menu-bar"></span>
                </div>
            </div>
        </div>
    
    </div>
    
    <script type="text/javascript" src="{{asset('js/front/navbar-subnav.js')}}"></script>