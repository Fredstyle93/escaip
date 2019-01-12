<div class="col-md-3">

        <div class="list-group">

                @foreach($users as $user)

                <a class="list-group-item" href="{{ route('conversations.show', $user->id) }} ">
                        @if($user->isOnline())
                        <span class=" connected"></span>
                        @endif
                    <img class="profil-img profil-img-sidebar" src="{{ asset('img/avatars/'. $user->avatar) }}" alt="">


                    {{ $user->firstName }}
                    @if(isset($unread[$user->id]))
                    <span class="badge badge-pill badge-primary">
                            {{ $unread[$user->id] }}
                    </span>
                    @endif
                </a>
                @endforeach


        </div>
    </div>
