<div class="card shadow text-center p-2">
    <div class="icon_container mx-auto my-3">
        <img class="card-img-top img-thumbnail" src="/images/user_icon_sample.png">
    </div>

    <div class="card-body">
        <h2 class="card-title">
            {{ $user->first_name }}
            {{ $user->last_name }}
        </h2>

        @if($user->id == Auth::id())
            <button type="button" class="btn btn-primary px-4" data-toggle="modal" data-target="#edit-profile">
                Edit Profile
            </button>
            <div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="#edit-profile" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProfiieModalCenteredLabel">Edit profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('user.update', ['id' => Auth::id()]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ $user->first_name }}" required autofocus>
        
                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ $user->last_name }}" required autofocus>
        
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--         
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                --}}
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success" value="Save"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @elseif(Auth::user()->is_following($user->id))
            <a class="btn btn-danger px-4" href="{{ route('user.unfollow', ['unfollowed_id' => $user->id]) }}">Unfollow</a>
        @else
            <a class="btn btn-primary px-4" href="{{ route('user.follow', ['followed_id' => $user->id]) }}">Follow</a>
        @endif

        <hr>

        <div class="d-flex justify-content-around">
            <div class="p-2">
                <div class="number">
                    <a href="{{ route('user.following', ['id' => $user->id]) }}">{{ $user->following_count }}</a>
                </div>
                <p>following</p>
            </div>

            <div class="p-2">
                <div class="number">
                    <a href="{{ route('user.followers', ['id' => $user->id]) }}">{{ $user->followers_count }}</a>
                </div>
                <p>followers</p>
            </div>
        </div>

        <hr>

        <div class="bg-light border p-2">
            <h3 class="font-weight-bold">{{ $user->microposts_count }}</h3>
            <p>blogs posted</p>
        </div>
    </div>
</div>
