@extends('admin.app')

@section('content')

    <div class="col-md-12">

      @if(Session::has('success'))
    <div class="btn btn-alert"> {{Session::get("success")}}</div> 
      @endif
        <a href="{{route('school.add')}}"><i class="fa fa-plus"></i></a>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($schools as $school)

              <tr>
            
                <th scope="row">{{$school->id}}</th>    
                
                  
              <td>
                {{$school->name}}
                
                
              
              </td>    

            <td> <a href="{{route('school.edit',$school->id)}}"><i class="fa fa-edit"></i></a>
            <a onclick="return confirm('Veux-tu supprimer')" href="{{route('schools.destroy',$school->id)}}"><i class="fa fa-times"></i></a>
                    

              </td>
                       
              </tr>
              @endforeach
            </tbody>
          </table>





    </div>




@endsection