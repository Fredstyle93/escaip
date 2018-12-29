@extends('template.content')

@section('main')



    <h1>Section Portfolios</h1> 
    
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
                                        {{$user->description}} 
                                        {{-- /*raccourcir la description*/ --}}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    
    <div class="row"></div>
    
     {{-- <div class="container">

        <div class="row">
        
            @foreach ($users as $user)

                <div class="col-md-4">
                    <div class="box box-widget widget-user" >
                        <div class="widget-user-header row ">
                            <div class="col-md-4 leftSide">
                                <img class=" img-circle"  src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="col-md-8 text-heading-widget">
                                <h3 class="widget-user-username"><a href="{{route('user.show',$user->id)}}">   <li>{{$user->firstName}}</li></a></h3>
                                @foreach($user->skills as $userSkill)
                                    <h5 class="widget-user-desc">{{$userSkill->name}}</h5>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget-user-image">
                        
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-12 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">{{$user->description}}</span>
                                </div>
                
                                <button class="profil-contact-btn center-block"> <span class="sprite sprite-profil-message"></span> Contacter</button>
                                <!-- /.description-block -->
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>  --}}
        




        
        

   
@endsection

@section('sidebar')
    @include('template.sidebar', ['tab'=>'welcome'])
@endsection
