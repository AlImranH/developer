<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'job_name' => ['required', 'max:255'],
            'image' => ['required'],
        ]);

        $img = $request->file('image')->store('public/images/portfolio');

        $portfolio = new Portfolio();

        $portfolio->image = $img;
        $portfolio->job_name = $request->job_name;
        $portfolio->pinterest = $request->pinterest;
        $portfolio->twitter = $request->twitter;
        $portfolio->dribbble = $request->dribbble;

        $portfolio->save();

        return redirect()->back()->with('success', 'Portfolio has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'job_name' => ['required', 'max:255'],
        ]);
        // dd($request->all());
        $image = $portfolio->image;
        if ($request->hasFile('image')) {
            Storage::delete($portfolio->image);
            $image = $request->file('image')->store('public/images/portfolio');
        }

        $portfolio->update([
            'image' => $image,
            'job_name' => $request->job_name,
            'pinterest' => $request->pinterest,
            'twitter' => $request->twitter,
            'dribbble' => $request->dribbble
        ]);

        return redirect()->back()->with('success', 'Portfolio has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->back()->with('success', 'Portfolio has been deleted successfully.');
    }
}
