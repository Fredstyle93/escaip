@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{asset('../bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">

    <h1>Utilisateurs</h1>    
    
    
    <div class="container">

            <div class="row">
        
                    @foreach ($users as $user)
        
        <div class="col-md-4">
        
        
        <div class="box box-widget widget-user" >
            <!-- Add the bg color to the header using any of the bg-* classes -->
        
            
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
    </div>
        




        
        


@endsection

