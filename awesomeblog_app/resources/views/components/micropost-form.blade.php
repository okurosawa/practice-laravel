@if($user->id == Auth::id())
<div class="bg-light border shadow p-4 mb-4">
    <form action="{{ route('micropost.create') }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea class="form-control" name="content" rows="5" placeholder="Share your thoughts..."></textarea>
        </div>
        <div class="form-group text-right">
            <input class="btn btn-primary px-5" type="submit" value="Post">
        </div>
    </form>
</div>
@endif
