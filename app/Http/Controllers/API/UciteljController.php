<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ucitelj;
use Illuminate\Http\Request;
use App\Http\Resources\UciteljResurs;
class UciteljController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ucitelji= Ucitelj::all();
        return UciteljResurs::collection($ucitelji);
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
     * @param  \App\Models\Ucitelj  $ucitelj
     * @return \Illuminate\Http\Response
     */
    public function show(Ucitelj $ucitelj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ucitelj  $ucitelj
     * @return \Illuminate\Http\Response
     */
    public function edit(Ucitelj $ucitelj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ucitelj  $ucitelj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ucitelj $ucitelj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ucitelj  $ucitelj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ucitelj $ucitelj)
    {
        $ucitelj->delete(); 
        return response()->json(['Uspesno obrisano!']);
    }
}
