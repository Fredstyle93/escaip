{{-- @extends('template.content')

@section('main') --}}

    @include ('flash.flash')

  <div class="portfolio-wrapper">
      <div class="students-header col-12">
          <a href="portfolio.html">
              <p class="title-carousel">Section portfolio</p>
          </a>
      </div>
      <div class="row">
          @foreach ($users as $user)
              <div class="portfolio-container students-grid col-12 col-sm-6 col-md-4">
                  <div class="portfolios-widget">
                      <div class="portfolios-category">
                          <h3 class="portfolios-category-title">Multimédia</h3>
                      </div>
                      <header class="portfolios-header" style="background-image: url(img/user_couverture/portfolio-bg.jpg); background-size: cover;">
                          <img src="img/avatars/1534274813.jpg" class="profil-img profil-img-portfolio-widget" alt="">
                          <p class="portfolios-name">{{$user->firstName}} {{$user->lastName}}</p>
                      </header>
                      <div class="portfolios-body">
                          <p class="portfolios-nb-views">105 vues</p>
                          <p class="portfolios-resume">
                              @if (strlen($user->description) <= 150)
                                  {{$user->description}}
                              @else
                                  {{substr($user->description, 0, 150)}}
                              @endif
                          </p>
                      </div>
                  </div>
              </div>

          @endforeach
      </div>
  </div>
{{-- @endsection --}}
@section('sidebar')
    @include('template.sidebar', ['tab' => 'profile'])
@endsection
