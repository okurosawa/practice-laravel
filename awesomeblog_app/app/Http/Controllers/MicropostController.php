<?php

namespace App\Http\Controllers;

use App\Micropost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MicropostRequest;

class MicropostController extends Controller
{
    public function create(MicropostRequest $request)
    {
        $validated = $request->validated();
        Micropost::create([
            'user_id' => Auth::id(),
            'content' => $validated['content']
        ]);
        return redirect('/home');
    }

    public function update(MicropostRequest $request, $micropost_id)
    {
        $validated = $request->validated();
        $micropost = Micropost::find($micropost_id);
        if ($micropost->user_id !== Auth::id()) {
            return back();
        }

        $micropost->update([
            'content' => $validated['content']
        ]);

        return redirect('/home');
    }

    public function delete($micropost_id)
    {
        $micropost = Micropost::find($micropost_id);
        if ($micropost->user_id !== Auth::id()) {
            return back();
        }

        $micropost->delete();

        return redirect('/home');
    }
}
