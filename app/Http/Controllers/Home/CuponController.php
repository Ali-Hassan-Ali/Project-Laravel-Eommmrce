<?php

namespace App\Http\Controllers\Home;

use App\Models\cupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function show(cupon $cupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function edit(cupon $cupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cupon $cupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(cupon $cupon)
    {
        //
    }
}
