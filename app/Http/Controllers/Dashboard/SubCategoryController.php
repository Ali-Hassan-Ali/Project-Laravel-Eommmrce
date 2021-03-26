<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Sub_Category;
use App\Models\Parent_Category;
use App\Http\Requests\SubCategory;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;



class SubCategoryController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:sub_categories_read'])->only('index');
        $this->middleware(['permission:sub_categories_create'])->only('create');
        $this->middleware(['permission:sub_categories_update'])->only('edit');
        $this->middleware(['permission:sub_categories_delete'])->only('destroy');

    }//end of constructor

    public function index(Request $request)
    {
        $sub_categories = Sub_Category::when($request->search, function ($q) use ($request) {

            // return $q->HasTranslations('name', '%' . $request->search . '%');
            return $q->where('name', 'like', '%' . $request->search . '%');

        })->latest()->paginate(10);

        // $sub_categories = Sub_Category::get();

        return view('dashboard.sub_category.index', compact('sub_categories'));
    }//end of index


    public function create()
    {

        $parent_categories = Parent_Category::get();

        return view('dashboard.sub_category.create',compact('parent_categories'));

    }//end of create

    
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
            return redirect()->route('dashboard.sub_categories.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }//end of store



    public function edit(sub_category $sub_category)
    {
        $parent_categories = Parent_Category::get();

        return view('dashboard.sub_category.edit',compact('sub_category','parent_categories'));
    }//end of edit


    public function update(SubCategory $request, Sub_Category $sub_category)
    {
        
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

                'parent_category_id' => $request->parent_category_id,

                 'image' => $request->image->hashName(),
               
                'color_1' => $request->color1,

                'color_2' => $request->color2,
                ]);
           
            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('dashboard.sub_categories.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }//end of update

    

    public function destroy(sub_category $sub_category)
    {
        $sub_category->delete();
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('dashboard.sub_categories.index');
    }//end of destroy

}//end of controller
