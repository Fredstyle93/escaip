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
              @if(Route::current()->getName() === 'skill.add')
                @foreach($skills as $skill)
              <tr>
            
                
                <th scope="row">{{$skill->id}}</th>
           
                <td>{{$skill->name}}</td>

              </tr>
              @endforeach
              @else
              <tr>
            
                
                  <th scope="row">{{$skill->id}}</th>
             
                  <td>{{$skill->name}}</td>
  
                </tr>
              @endif
            </tbody>
          </table>





    </div>

    {{Form::open(Route::current()->getName() === 'skill.add'? ['route' => 'skill.add', 'method'=> 'post'] : ['route' =>['skill.update', $skill->id], 'method'=> 'put'])}}
        <div class="box-body">

            <div class="col-md-12">

                                <div class="form-group">
            {{Form::label('name', 'Nom')}}
            {{Form::text('name', $skill->name,['class'=>'form-control'])}}
          </div>


            </div>

        </div>

        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{Route::current()->getName() === 'skill.add' ? "Ajouter" : "Modifier" }}</button>
        </div>
      </form>


@endsection