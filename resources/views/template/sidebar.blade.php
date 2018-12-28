


    


<div class="sidebar col-lg-3">
    <nav class="sidebar-nav">
        <ul class="sidebar-menu">
            <div class="sidebar-menu-section">
            <a href="{{route('index')}}" class="sidebar-menu-link">
                    <li class="sidebar-menu-items sidebar-menu-items-selected">
                        <span class="sprite sprite-sidebar-home"></span> <span class="sidebar-menu-items-name">Accueil</span>
                    </li>
                </a>
            @if(auth::check())
            <a href="{{action('UserController@show',auth::user()->id)}}" class="sidebar-menu-link">
                    <li class="sidebar-menu-items locked">
                        <div class="bg-locked">
                            <span class="sprite sprite-sidebar-locked"></span>
                        </div> 
                        <span class="sidebar-menu-items-name">Mon profil</span>
                    </li>
                </a>
                @endif
                <a href="category.html" class="sidebar-menu-link">
                    <li class="sidebar-menu-items">
                        <span class="sprite sprite-sidebar-learning"></span> <span class="sidebar-menu-items-name">Cours</span>
                    </li>
                </a>
                <a href="portfolio.html" class="sidebar-menu-link">
                    <li class="sidebar-menu-items">
                        <span class="sprite sprite-sidebar-portfolio"></span> <span class="sidebar-menu-items-name">Portfolios</span>
                    </li>
                </a>
            </div>

        </ul>
    </nav>

    <footer class="sidebar-footer">
        <ul class="sidebar-infos">
            <li class="sidebar-infos-items">
                <img src="img/icones/1x/Fichier%202.png" alt="Suivez-nous sur Facebook" class="icon sidebar-footer-icones">
                <p class="info-content">Suivez-nous sur Facebook !</p>
            </li>
            <li class="sidebar-infos-items">
                <img src="img/icones/1x/Fichier%203.png" alt="" class="icon sidebar-footer-icones">
                <p class="info-content">Boîte à commentaires !</p>
            </li>
        </ul>

        <p class="copyrights">&copy; Tous les droits</p>
    </footer>


</div>
