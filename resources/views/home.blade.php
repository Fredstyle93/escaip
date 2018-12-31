@extends('template.content')

@section('main')
    <?php
        use Carbon\Carbon;
        Carbon::setLocale('fr');
    ?>
    
    @include('projects.create')
    @include('users.index')

    @foreach ($projects as $project)
        <div class="post-feed content-container">
            <div class="post-feed-header">
                <div class="post-user">
                    <img src="img/avatars/{{$project->user->avatar}}" alt="" class="profil-img profil-img-feed">
                    <p class="post-information-name">{{$project->user->firstName}}</p>
                </div>
                <div class="post-date">
                    <p>{{Carbon::createFromTimestamp(strtotime($project->created_at))->diffForHumans()}}</p>
                </div>
            </div>
            <div class="post-feed-content project">
                <div class="row project-header">
                    <div class="project-image-container col-12  col-md-4">    
                        <img src="img/projects/{{$project->imageProject}}" class="project-image" alt="">
                    </div>
                    <div class="project-infos col-12  col-md-8">
                        <div class="project-primary-infos">
                            <h2 class="project-title">{{$project->title}}</h2>
                            <p class="published-time"> - Il y une semaine</p>
                            <p class="project-nbViews">{{$project->nbViews}} vues</p>
    {{-- <!--               <button class="profil-contact-btn project-btn" style="display:inline-block;"> <span class="sprite sprite-profil-message"></span> <span class="button-name" style="display:none;">Contacter</span></button>--> --}}
                        </div>
                        <div class="project-secondary-infos">
                            <strong class="project-techo">Technologie(s) utilisée(s)</strong>
                            <strong class="project-categorie">Catégorie : {{$project->category->title}}</strong>
                            <ul class="project-techno-list">
                                <li class="project-techno-list-items">Unity2D</li>
                                <li class="project-techno-list-items">Photoshop CC2018</li>
                                <li class="project-techno-list-items">Visual StudioCode</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>'welcome'])
@endsection

