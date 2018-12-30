
{!! Form::open(['class'=>'form-learning']) !!}
    
    <div class="input-container">
        {!! Form::label('title', 'Titre', ['class'=>'label-learning-title']) !!}
        {!! Form::text('title', null, ['class'=>'input-title']) !!}
    </div>
    <div class="input-container">
        {!! Form::label('subTitle', 'Sous-titre', ['class'=>'label-learning-title']) !!}
        {!! Form::text('subTitle', null, ['class'=>'input-title']) !!}
    </div>
    <div class="input-container">
        {!! Form::label('category', 'Catégory', ['class'=>'label-learning-category']) !!}
        {{-- {!! Form::select('category', null, ['class'=>'input-title']) !!} --}}
    </div>
     {{-- @if(Route::current()->getName === 'home')  --}}
        {{-- <div class="input-container">
            {!! Form::label('category', 'Catégorie', ['class'=>'label-learning-category']) !!}
            {!! Form::select('category', $categories, null) !!}
            
        </div> --}}
    {{--  @endif  --}}
    <div class="input-container">
        {!! Form::label('imageProject', 'Image de votre projet', ['class'=>'label-learning-title']) !!}
        {!! Form::file('imageProject') !!}
    </div>
    <div class="input-container">
        {!! Form::label('description', 'Description', ['class' => 'label-learning-description']) !!}
        {!! Form::textarea('description', null, ['input-description']) !!}
    </div>
    <button>Publier</button>
    
{!! Form::close() !!}


