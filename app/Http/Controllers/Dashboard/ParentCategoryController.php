<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Parent_Category;
use App\Http\Requests\ParentCategory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Http\Request;

class ParentCategoryController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:parent_categorys_read'])->only('index');
        $this->middleware(['permission:parent_categorys_create'])->only('create');
        $this->middleware(['permission:parent_categorys_update'])->only('edit');
        $this->middleware(['permission:parent_categorys_delete'])->only('destroy');

    }//end of constructor

    public function index(Request $request)
    {
        $parent_categories = Parent_Category::when($request->search, function ($q) use ($request) {

            // return $q->HasTranslations('name', '%' . $request->search . '%');
            return $q->where('name', 'like', '%' . $request->search . '%');

        })->latest()->paginate(10);

        return view('dashboard.parent_category.index', compact('parent_categories'));

    }//end of index


    public function create()
    {
        return view('dashboard.parent_category.create');

    }//end of create


    public function store(ParentCategory $request)
    {
        
        $parent_categories = $request->all();
        try {

            $validated = $request->validated();

                $my_categories = new Parent_Category();
                $my_categories->name = ['ar'=> $parent_categories['name'],'en'=> $parent_categories['name_en']];
                $my_categories->save();

            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('dashboard.parent_category.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }//end try

    }//end of store

    

    public function edit(parent_category $parent_category)
    {
        return view('dashboard.parent_category.edit', compact('parent_category'));
    }//end of edit

    

    public function update(ParentCategory $request, parent_category $parent_category)
    {
        $parent_categories = $request->all();

        try {
            $parent_category->update([

                'name' => ['ar'=> $request->name,'en'=> $request->name_en],
            ]);
            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('dashboard.parent_category.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }//end try

    }//end of update

    

    public function destroy(parent_category $parent_category)
    {
        $parent_category->delete();
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('dashboard.parent_category.index');
    }//end of destroy


}//end of controller
