@extends('template.content')

@section('main')

<div class="content-container profil">
        <div class="profil-header">
            <div class="profil-header-img">

            </div>

            <div class="profil-container">
                <div class="profil-container-image">
                    <img src="{{asset('img/avatars/' . Auth::user()->avatar)}}" alt="nomProfil" class="profil-image">
                </div>
                <div class="profil-infos ">

                    <h2 class="profil-name">{{$user->firstName}} {{$user->lastName}}</h2>

                </div>
                 @if(Auth::user())
                    <a href="{{route('profile.edit')}}" class="profil-modify-btn">Modifier le profil</a>
                @else
                    <button class="profil-contact-btn"> <span class="sprite sprite-profil-message"></span> Contacter</button>
                @endif 
            </div>
        </div>

        <div class="profil-details row">
            <ul class="profil-details-list col-6 col-lg-6">
                <li class="details-elements">
                    <h4>Institution(s) scolaire</h4>
                    <ul class="scholarship-list">
                        @foreach($user->schools as $userSchool)
                        <li class="knowledge-list-elements"> {{$userSchool->name}}</li>
                        @endforeach
                    </ul>

                </li>
                <li class="details-elements"> 
                    <h4>Connaissances </h4>
                    <ul class="knowledge-list">
                        @foreach($user->skills as $userSkill)
                        <li class="knowledge-list-elements">{{$userSkill->name}} </li>
                        @endforeach
                        <li class="knowledge-list-elements"> </li>
                    </ul>
                </li>
            </ul>
            <ul class="profil-stats-list col-6 col-lg-6">
                <li class="stats-elements">
                    <div class="stats-number"><p>25</p></div> <p class="stats-name">projets</p>
                </li>
                <li class="stats-elements">
                    <div class="stats-number"><p>12x</p></div><p class="stats-name">venu en aide</p>
                </li>
                <li class="stats-elements">
                    <div class="stats-number"><p>208</p></div><p class="stats-name">interractions</p>
                </li>
            </ul>
        </div>
        {{-- <div class="profil-contacts">
            <div class="profil-contacts-container">
                <p class="see-contacts">Voir les contacts de {{$user->firstName}}
                    <img src="img/users/user01.jpg" alt="" class="contacts-image contacts-image-1">
                    <img src="img/users/user02.jpg" alt="" class="contacts-image contacts-image-2">
                    <img src="img/users/user03.jpg" alt="" class="contacts-image contacts-image-3">
                    <span class="contacts-number"> 25+ </span>
                </p>
            </div>
        </div> --}}
        <div class="profil-description ">
           <h4>Description</h4>
            <p class="description-text">
                {{$user->description}}
            </p>
        </div>
        {{-- <div class="buttons-container">
            <div class="profil-button-container">
                <div class="profil-button calendar-button">
                    <a href="" class="calendar-button-name">Mon calendrier</a>

                </div>
            </div>
            <div class="profil-button-container portfolio-button">
                <div class="profil-button">
                    <a href="" class="portfolio-button-name">Mon portfolio</a>

                </div>
            </div>
        </div> --}}
        
    
            <div class="profil-container-history">
                <div class="profil-historique row">
                    <div class="historic-grid historic-category-title col-12">
                        <a href="#" class="history-link-title">
                            <p>Projets de {{$user->firstName}}</p>
                        </a>
                    </div>
                
                
                    <div class="content-grid col-12 col-sm-6 col-md-4 col-xl-3">
                        <a href="article.html" class="article-link">
                            <div class="historic-article article-image">
                                <div class="article-bg-title">
                                    <p class="article-title">
                                        Titre de l'article
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

    </div>
    @endsection

@section('sidebar')
    @include('template.sidebar', ['tab' => 'profile'])    
@endsection