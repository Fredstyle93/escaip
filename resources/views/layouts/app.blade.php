<!doctype html>
<html lang="en">

@include('template.head')

<body>
    <!-- --------------------------------- NAV BAR --------------------------------- -->

    @include('template.navbar')
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
