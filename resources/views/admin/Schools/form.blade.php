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
              @if(Route::current()->getName() === 'school.add')
                @foreach($schools as $school)
              <tr>
            
                
                <th scope="row">{{$school->id}}</th>
           
                <td>{{$school->name}}</td>

              </tr>
              @endforeach
              @else
              <tr>
            
                
                  <th scope="row">{{$school->id}}</th>
             
                  <td>{{$school->name}}</td>
  
                </tr>
              @endif
            </tbody>
          </table>





    </div>

    {{Form::open(Route::current()->getName() === 'school.add'? ['route' => 'school.add', 'method'=> 'post'] : ['route' =>['school.update', $school->id], 'method'=> 'put'])}}
        <div class="box-body">

            <div class="col-md-12">

                                <div class="form-group">
            {{Form::label('name', 'Nom')}}
            {{Form::text('name', $school->name,['class'=>'form-control'])}}
          </div>


            </div>

        </div>

        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{Route::current()->getName() === 'school.add' ? "Ajouter" : "Modifier" }}</button>
        </div>
      </form>


@endsection