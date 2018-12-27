<!doctype html>
<html lang="en">

<head>
    <title>Fabrice Garrec</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>
    <!-- --------------------------------- NAV BAR --------------------------------- -->

    <div class="navbar">
        <div class="l-container">
            <div class="navbar-logo">
                <img src="img/logo/logo.png" class="logo" alt="nomSite">
            </div>

            <div class="navbar-menu">
                <nav class="navbar-menu-log">
                    <a href="" class="navbar-menu-items ">Sinscrire</a>
                    <a href="index_auth.html" class="navbar-menu-items">Se connecter</a>
                </nav>

                <div class="burger-menu">
                    <span class="burger-menu-bar"></span>
                    <span class="burger-menu-bar"></span>
                    <span class="burger-menu-bar"></span>
                </div>
            </div>
        </div>

    </div>
    <header class="header home">
        <div class="header-image">

        </div>
    </header>
    <!-- --------------------------------- TOGGLE NAVIGATION --------------------------------- -->
    @include('template.toggle-navigation')
    <div class="hide"></div>

    <!-- --------------------------------- CONTENT --------------------------------- -->
    <div class="content">
        <div class="l-container">
            <!-- --------------------------------- ARIANE --------------------------------- -->
            {{--  <div class="ariane row">
                <ul class="ariane-list col-12 col-lg-9 offset-lg-3">
                    <span class="ariane-list-nomPage">Catégorie </span>
                </ul>
            </div>  --}}
            <div class="row">
                <!-- --------------------------------- SIDEBAR --------------------------------- -->
                @include('template.sidebar')
                <!-- --------------------------------- NEWS --------------------------------- -->
                <div class="wrapper col-12 col-lg-9 offset-lg-3">
                    @include('template.content')
                </div>
            </div>
        </div>
    </div>
    
    @include('template.footer')


</body>
</html>
