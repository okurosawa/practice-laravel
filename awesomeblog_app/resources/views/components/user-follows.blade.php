@foreach ($users as $user)
    <div class="d-flex justify-content-between border mb-4">
        <div class="align-self-center">
            <div class="d-inline-block thumbnail-container p-3 mr-4">
                <img class="img-thumbnail" src="/images/user_icon_sample.png">
            </div>
            <h3 class="d-inline-block">
                <a href="{{ route('user.home', ['id' => $user->id]) }}">
                    {{ $user->first_name }}
                    {{ $user->last_name }}
                </a>
            </h3>
        </div>
        <div class="d-inline-block align-self-center p-4">
            @if($user->id != Auth::id())
                @if(Auth::user()->is_following($user->id))
                    <a class="btn btn-danger px-4" href="{{ route('user.unfollow', ['unfollowed_id' => $user->id]) }}">Unfollow</a>
                @else
                    <a class="btn btn-primary px-4" href="{{ route('user.follow', ['followed_id' => $user->id]) }}">Follow</a>
                @endif
            @endif
        </div>
    </div>
@endforeach

@if (count($users) == 0)
    <h2>No found.</h2>
@endif

@section('css')
<style>
.thumbnail-container {
    display: inline-block;
    width: 100px;
}
</style>
@endsection
