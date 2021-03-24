<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Parent_Category;
use App\Http\Requests\ParentCategory;
use Illuminate\Http\Request;

class ParentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent_categories = Parent_Category::get();

        return view('dashboard.parent_category.index', compact('parent_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.parent_category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParentCategory $request)
    {
        
        $parent_categories = $request->all();
        try {

            $validated = $request->validated();

                $my_categories = new Parent_Category();
                $my_categories->name = ['ar'=> $parent_categories['name'],'en'=> $parent_categories['name_en']];
                $my_categories->save();

            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('parent_category.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parent_category  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function show(parent_category $parent_category)
    {
      



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parent_category  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function edit(parent_category $parent_category)
    {
        return view('dashboard.parent_category.edit', compact('parent_category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parent_category  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parent_category $parent_category)
    {
        $parent_categories = $request->all();

        try {
        $parent_category->update([

            'name' => ['ar'=> $request->name,'en'=> $request->name_en],
        ]);
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('parent_category.index');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parent_category  $parent_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(parent_category $parent_category)
    {
        $parent_category->delete();
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('parent_category.index');
    }
}
