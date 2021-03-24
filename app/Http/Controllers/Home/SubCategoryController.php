<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Sub_Category;
use App\Models\Parent_Category;
use App\Http\Requests\SubCategory;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;



class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $sub_categories = Sub_Category::get();

        return view('dashboard.sub_category.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $parent_categories = Parent_Category::get();

        return view('dashboard.sub_category.create',compact('parent_categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategory $request)
    {
        $sub_categories = $request->all();
        try {

            $validated = $request->validated();

                $my_categories = new Sub_Category();
                $my_categories->name = ['ar'=> $sub_categories['name'],'en'=> $sub_categories['name_en']];
                $my_categories->user_id = auth()->user()->id;
                $my_categories->parent_category_id =$request->parent_cat_id;

                Image::make($request->image)
                ->resize(700, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/categories/' . $request->image->hashName()));
                $my_categories->image = $request->image->hashName();

                $my_categories->color_1 = $request->color1;
                $my_categories->color_2 = $request->color2;



                $my_categories->save();

            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('sub_category.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sub_category  $sub_category
     * @return \Illuminate\Http\Response
     */
    public function show(sub_category $sub_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sub_category  $sub_category
     * @return \Illuminate\Http\Response
     */
    public function edit(sub_category $sub_category)
    {
        $parent_categories = Parent_Category::get();

        return view('dashboard.sub_category.edit',compact('sub_category','parent_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sub_category  $sub_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sub_Category $sub_category)
    {

        

        $request->validate([
            'name' => 'required',
            'name_en' => 'required',
            'color1' => 'required',
            'color2' => 'required',
            'image' => 'image',
        ]);
        
        try {
            if ($request->image) {
                Storage::disk('public_uploads')->delete('/categories/' . $sub_category->image);
                
              
               Image::make($request->image)
               ->resize(700, null, function ($constraint) {
                   $constraint->aspectRatio();
               })
               ->save(public_path('uploads/categories/' . $request->image->hashName()));
              
            //  $request['image'] = $request->image->hashName();
            }
                $sub_category->update([

                'name' => ['ar'=> $request->name,'en'=> $request->name_en],

                'user_id' => auth()->user()->id,

                'parent_category_id' => $request->parent_cat_id,

                 'image' => $request->image->hashName(),
               
                'color_1' => $request->color1,

                'color_2' => $request->color2,
                ]);
           
            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('sub_category.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sub_category  $sub_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(sub_category $sub_category)
    {
        $sub_category->delete();
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('sub_category.index');
    }
}
