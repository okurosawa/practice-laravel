<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuggestion;
use App\Suggestion;
use App\Vote;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index()
    {
        $collection = Suggestion::withCount('votes')->get();

        return view('suggestions.index', compact('collection'));
    }

    public function create()
    {
        return view('suggestions.create');
    }

    public function store(StoreSuggestion $request)
    {
        $validated = $request->validated();
        Suggestion::create([
            'content' => $validated['content'],
            'author'  => $validated['author']
        ]);

        return redirect('/suggestions');
    }

    public function edit($id)
    {
        $data = Suggestion::where('id', $id)->first();

        return view('suggestions.edit', compact('data'));
    }

    public function update(StoreSuggestion $request, $id)
    {
        $validated = $request->validated();
        Suggestion::where('id', $id)
            ->update([
                'content' => $validated['content'],
                'author'  => $validated['author']
            ]);

        return redirect('/suggestions');
    }

    public function delete($id)
    {
        Suggestion::destroy($id);

        return redirect('/suggestions');
    }

    public function upVote(Request $request)
    {
        Vote::create([
            'suggestion_id' => $request->suggestionId
        ]);

        return redirect('/suggestions');
    }

    public function downVote($id)
    {
        Vote::where('suggestion_id', $id)
            ->latest()
            ->first()
            ->delete();

        return redirect('/suggestions');
    }
}
