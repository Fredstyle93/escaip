
        <nav class="sidebar-nav">
            <ul class="sidebar-menu">
                <div class="sidebar-menu-section">
                    <a href="{{Auth::user() ? route('home') : route('welcome')}}" class="sidebar-menu-link">
                        <li class="sidebar-menu-items  {{ $tab == 'welcome' ?  'sidebar-menu-items-selected' : "" }}">
                            <span class="sprite sprite-sidebar-home"></span> <span class="sidebar-menu-items-name">Accueil</span>
                        </li>
                    </a>
                    @auth()
                        <a href="{{route('profile')}}" class="sidebar-menu-link">
                            <li class="sidebar-menu-items locked {{ $tab == 'profile' ?  'sidebar-menu-items-selected' : "" }}">
                                <div class="bg-locked">
                                    <img src="{{ asset('img/avatars/'.Auth::user()->avatar) }}" alt="{{Auth::user()->name}}" class="profil-img profil-img-sidebar">
                                </div>
                                <span class="sidebar-menu-items-name">Mon profil</span>
                            </li>
                        </a>
                    @endauth
                </div>
                <div class="sidebar-menu-section">
                    {{-- <a href="{{route('category.index')}}" class="sidebar-menu-link">
                        <li class="sidebar-menu-items {{ $tab == 'category' ?  'sidebar-menu-items-selected' : "" }}">
                            <span class="sprite sprite-sidebar-learning"></span> <span class="sidebar-menu-items-name">Cours</span>
                        </li>
                    </a> --}}
                    {{-- @auth()
                        <a href="calendar.html" class="sidebar-menu-link">
                            <li class="sidebar-menu-items">
                                <span class="sprite sprite-sidebar-calendar"></span> <span class="sidebar-menu-items-name">Calendrier</span>
                            </li>
                        </a>
                    @endauth --}}
                    <a href="{{route('category.index')}}" class="sidebar-menu-link">
                        <li class="sidebar-menu-items {{ $tab == 'portfolios' ?  'sidebar-menu-items-selected' : "" }}">
                            <span class="sprite sprite-sidebar-portfolio"></span> <span class="sidebar-menu-items-name">Portfolios</span>
                        </li>
                    </a>
                    @auth()
                    <a href="{{route('messagerie')}}" class="sidebar-menu-link">
                        <li class="sidebar-menu-items {{ $tab == 'portfolios' ?  'sidebar-menu-items-selected' : "" }}">
                            <span class="sprite sprite-sidebar-portfolio"></span> <span class="sidebar-menu-items-name">Messages</span>
                        </li>
                    </a>
                    <a href="{{route('friend',Auth::user())}}" class="sidebar-menu-link">
                        <li class="sidebar-menu-items {{ $tab == 'portfolios' ?  'sidebar-menu-items-selected' : "" }}">
                            <span class="sprite sprite-sidebar-portfolio"></span> <span class="sidebar-menu-items-name">Amis</span>
                        </li>
                    </a>
                    @endauth
                </div>
            </ul>
        </nav>
