<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Market;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MarketRequest;


class MarketController extends Controller
{

    public function index(Request $request)
    {
     $markets = Market::when($request->search, function($q) use ($request){

            return $q->where('name', 'like', '%' . $request->search . '%');
                // ->orWhere('phone', 'like', '%' . $request->search . '%')
                // ->orWhere('address', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.markets.index', compact('markets'));
    }//end of index


    public function create()
    {
        return view('dashboard.markets.create');
    }//end create


    public function store(MarketRequest $request)
    {   

        $markets_all = $request->all();

        try {

            $markets = new Market();
            $markets->name = ['ar'=> $markets_all['name'],'en'=> $markets_all['name_en']];
            $markets->user_id = auth()->user()->id;
            $markets->save();

            // Market::create($request->all());
            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('dashboard.markets.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }//end try

    }//end store


    public function edit(Market $market)
    {
        return view('dashboard.markets.edit', compact('market'));
    }//end of edit


    public function update(MarketRequest $request, Market $market)
    {

        try {

            $market->update([

                'name'    => ['ar'=> $request->name,'en'=> $request->name_en],
                'user_id' => auth()->user()->id,
            ]);
            
            // $market->update($request->all());
            notify()->success('Laravel Notify is awesome!');
            return redirect()->route('dashboard.markets.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }//end try

    }//end of update


    public function destroy(Market $market)
    {
        $market->delete();
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('dashboard.markets.index');

    }//end of destroy


}//end of controller
