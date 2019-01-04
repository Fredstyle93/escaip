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
                <th scope="row">{{$school->id}}</th>
                

                <td>{{$school->name}}</td>
          
          
              
               
              </tr>
              @endforeach
            </tbody>
          </table>





    </div>

    {{Form::open(['action' => 'SchoolController@store', 'method'=> 'post'])}}
        <div class="box-body">

            <div class="col-md-12">

                                <div class="form-group">
            {{Form::label('name', 'Nom')}}
            {{Form::text('name', 'Nom',['class'=>'form-control'])}}
          </div>


            </div>

        </div>

        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
      </form>


@endsection