@extends('admin.app')

@section('content')

    <div class="col-md-12">

      @if(Session::has('success'))
    <div class="btn btn-alert"> {{Session::get("success")}}</div> 
      @endif
        <a href="{{route('skill.add')}}"><i class="fa fa-plus"></i></a>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)

              <tr>
            
                <th scope="row">{{$skill->id}}</th>    
                
                  
              <td>
                {{$skill->name}}
                
                
              
              </td>    

            <td> <a href="{{route('skill.edit',$skill->id)}}"><i class="fa fa-edit"></i></a>
            <a onclick="return confirm('Veux-tu supprimer')" href="{{route('skills.destroy',$skill->id)}}"><i class="fa fa-times"></i></a>
                    

              </td>
                       
              </tr>
              @endforeach
            </tbody>
          </table>





    </div>




@endsection