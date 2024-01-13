<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('news', compact('news'));
    }

    public function create()
    {
        return view('create-news');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/news')->with('success', 'News item created successfully.');
    }

    public function edit($id)
    {
        $newsItem = News::findOrFail($id);
        return view('edit-news', compact('newsItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $newsItem = News::findOrFail($id);

        $newsItem->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/news')->with('success', 'News item updated successfully.');
    }

    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->delete();

        return redirect('/news')->with('success', 'News item deleted successfully.');
    }
}
