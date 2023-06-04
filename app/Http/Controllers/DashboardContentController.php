<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.contents.index', [
            'contents' => Content::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.contents.create', [
            'categories' => Category::all(),
            'sections' => Section::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'slug' => 'required|unique:contents',
            'category_id' => 'nullable',
            'section_id' => 'nullable',
            'image' => 'image|file|max:1024',
        ]);
        
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('content-images');
        }
        

        Content::create($validatedData);
        

        return redirect('/dashboard/contents')->with('success', 'New content has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        return view('dashboard.contents.show', [
            'content' => $content
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        return view('dashboard.contents.edit', [
            'content' => $content,
            'categories' => Category::all(),
            'sections' => Section::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'nullable',
            'section_id' => 'nullable',
            'desc' => 'required'
        ];

        if($request->slug != $content->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('content-images');
        }

        $content->update($validatedData);
        return redirect('/dashboard/contents')->with('success', 'Content has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        if($content->image) {
            Storage::delete($content->image);
        }
        Content::destroy($content->id);
        return redirect('/dashboard/contents')->with('success', 'Content has been deleted!');
    }
}
