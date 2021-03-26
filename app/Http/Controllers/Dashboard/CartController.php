<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Market;
use App\Models\Parent_Category;
use App\Models\Cart;
use App\Http\Requests\CartRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CartController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:carts_read'])->only('index');
        $this->middleware(['permission:carts_create'])->only('create');
        $this->middleware(['permission:carts_update'])->only('edit');
        $this->middleware(['permission:carts_delete'])->only('destroy');

    }//end of constructor

    public function index(Request $request)
    {
        $carts = Cart::when($request->search, function ($q) use ($request) {

            // return $q->HasTranslations('name', '%' . $request->search . '%');
            return $q->where('users_id', 'like', '%' . $request->search . '%')
                ->orWhere('sub_category_id', 'like', '%' . $request->search . '%')
                ->orWhere('ar_price', 'like', '%' . $request->search . '%')
                ->orWhere('amarat_price', 'like', '%' . $request->search . '%')
                ->orWhere('kowit_price', 'like', '%' . $request->search . '%')
                ->orWhere('cart_text', 'like', '%' . $request->search . '%');

        })->latest()->paginate(10);

        return view('dashboard.carts.index', compact('carts'));
    }//end of index


    public function create()
    {
        $markets       = Market::all(); 
        $sub_categorys = Parent_Category::all(); 
        return view('dashboard.carts.create' ,compact('markets','sub_categorys'));
    }//end ofcreate


    public function store(CartRequest $request)
    {
        $request_all = $request->all();

        try {

            $carts = New Cart();

            $carts->cart_name       = ['ar'=> $request_all['cart_name'],'en'=> $request_all['cart_name_en']];
            $carts->cart_text       = ['ar'=> $request_all['cart_text'],'en'=> $request_all['cart_text_en']];
            $carts->users_id        = auth()->user()->id;
            $carts->market_id       = $request->market_id;
            $carts->sub_category_id = $request->sub_category_id;
            $carts->count_of_buy    = $request->count_of_buy;
            $carts->ar_price        = $request->ar_price;
            $carts->amrecan_price   = $request->amrecan_price;
            $carts->kowit_price     = $request->kowit_price;
            $carts->amarat_price    = $request->amarat_price;


            $carts->save();
            // dd($carts);    
            // dd($carts);

            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('dashboard.carts.index');


        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }//end try


    }//end of store


    public function edit(Cart $cart)
    {
        $markets       = Market::all(); 
        $sub_categorys = Parent_Category::all(); 
        return view('dashboard.carts.edit' ,compact('markets','sub_categorys','cart'));
    }//end of edit


    public function update(CartRequest $request, Cart $cart)
    {
        
        try {

        // dd($request->all())
            ;
            $cart->update([

                'cart_name.'      => ['ar'=> $request->cart_name,'en'=> $request->cart_name_en],
                'cart_text.'      => ['ar'=> $request->cart_text,'en'=> $request->cart_text_en],
                'users_id'        => auth()->user()->id,
                'market_id'       => $request->market_id,
                'sub_category_id' => $request->sub_category_id,
                'count_of_buy'    => $request->count_of_buy,
                'ar_price'        => $request->ar_price,
                'amrecan_price'   => $request->amrecan_price,
                'kowit_price'     => $request->kowit_price,
                'amarat_price'    => $request->amarat_price,
            ]);

            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('dashboard.carts.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }//end try

    }//end of update


    public function destroy(Cart $cart)
    {
        $cart->delete();
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('dashboard.carts.index');

    }//end of destroy

}//end of controller
