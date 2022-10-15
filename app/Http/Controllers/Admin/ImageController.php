<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'position' => ['required', 'max:255'],
            'image' => ['required', 'mimes:jpeg,jpg,png,gif'],
        ]);

        $image = $request->file('image')->store('public/images/image');
        $slider = new Image();
        $slider->position = $request->position;
        $slider->image = $image;
        $slider->save();

        return redirect()->back()->with('success', 'Image has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('admin.image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'position' => ['required', 'max:255'],
            'image' => ['mimes:jpeg,jpg,png,gif'],
        ]);


        $img = $image->image;
        if ($request->hasFile('image')) {
            Storage::delete($image->image);
            $img = $request->file('image')->store('public/images/image');
        }

        $image->update([
            'position' => $request->position,
            'image' => $img,
        ]);

        return redirect()->back()->with('success', 'Image has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        Storage::delete($image->image);
        $image->delete();
        return redirect()->back()->with('success', 'Image has been deleted successfully.');
    }
}
