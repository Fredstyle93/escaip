<div class="new-post content-container">
        <div class="new-post-information">
            <img src="{{asset('img/avatars/' . Auth::user()->avatar)}}" alt="" class="profil-img profil-img-new-post">
            {{-- <p class="new-post-title"> {{Route::current()->getName() === 'category.show' ? "Publier dans {$category->name}" : 'Choisissez le type de publication'}} </p> --}}
        </div>
    
        <div class="new-post-type">
            {{-- @if(Route::current()->getName() === 'category.show') --}}
                {{-- <span class="sprite sprite-postType-learning post-learning-button"></span> --}}
            {{-- @else --}}
                {{-- <span class="sprite sprite-postType-learning post-learning-button"></span>
                <span class="sprite sprite-postType-event post-event-button" id="event"></span> --}}
                {{-- <span class="sprite sprite-postType-project post-project-button" id="project"></span> --}}
                <div class="spriteHTML">
                    <span class="add-post-icon">+</span>
                </div>

            {{-- @endif --}}
        </div>
    </div>
    
    <div class="post-form add-post-form content-container col-12">
    
        
        <div class="post-form-header">
            <h4 class="post-form-learning-title">
                Publier un projet
            </h4>
        </div>    
        @include('forms.projects')
    </div>