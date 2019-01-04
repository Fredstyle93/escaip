@extends('admin.app')

@section('content')

    <div class="col-md-12">

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
              </tr>
            </thead>
            <tbody>
                @foreach($schools as $school)
              <tr>
              <a href="{{route('school.edit',$school->id)}}">
                <th scope="row">{{$school->id}}</th>  
            </a>
                <td>{{$school->name}}</td>
          
          
              
               
              </tr>
              @endforeach
            </tbody>
          </table>





    </div>




@endsection