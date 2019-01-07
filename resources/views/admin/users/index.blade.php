@extends('admin.app')
@section('content')

<table class="table table-striped">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)

          <tr>
        
            <th scope="row">{{$user->id}}</th>    
            
              
          <td>{{$user->firstName}}</td>    

        <td> <a href=""><i class="fa fa-edit"></i></a>
        <a onclick="return confirm('Veux-tu supprimer')" href="{{route('user.destroy',$user->id)}}"><i class="fa fa-times"></i></a>
                

          </td>
                   
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection