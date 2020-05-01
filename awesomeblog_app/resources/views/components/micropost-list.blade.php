
<div class="bg-light border shadow p-4 mb-4">
    <h2 class="text-center mb-4">Blogs</h2>
    @if(Auth::user()->is_following($user->id) || $user->id == Auth::id())
        @foreach ($user->microposts as $micropost)
            <div class="card mb-4">
                @if($user->id == Auth::id())
                    <div class="card-header text-right">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#post-edit-{{ $micropost->id }}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#post-delete-{{ $micropost->id }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>

                    <!-- Edit modal -->
                    <div class="modal fade" id="post-edit-{{ $micropost->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="{{ route('micropost.update', ['micropost_id' => $micropost->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <textarea class="form-control" name="content" rows="5">{{ $micropost->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-success" value="Save"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Edit modal -->

                    <!-- Delete modal -->
                    <div class="modal fade" id="post-delete-{{ $micropost->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="{{ route('micropost.delete', ['micropost_id' => $micropost->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        <p class="text-center text-danger">Are you sure to delete?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                        <input type="submit" class="btn" value="Delete"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Delete modal -->
                @endif

                <div class="card-text p-4">
                    <div class="form-group">
                        <p class="micropost_content">{{ $micropost->content }}</p>
                    </div>
                    <p class="text-muted text-right m-0">
                        <i class="fas fa-pen"></i> {{ $micropost->created_at }}
                        @if ($micropost->created_at != $micropost->updated_at)
                            &nbsp;<i class="fas fa-sync-alt"></i> {{ $micropost->updated_at }}
                        @endif
                    </p>
                </div>

            </div>
        @endforeach

        @if(count($user->microposts) == 0)
            @if($user->id == Auth::id())
                <h3 class="text-center text-danger">Let's try to post!</h3>
            @else
                <h3 class="text-center text-danger">No posts.</h3>
            @endif
        @endif
    @else
        <h3 class="text-center text-danger">
            You are not following this user!
        </h3>
    @endif
</div>
