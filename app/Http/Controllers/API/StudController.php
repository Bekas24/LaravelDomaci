<?php

namespace App\Http\Controllers\API;
use App\http\Resources\StudioResurs;
use App\Http\Controllers\Controller;
use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class StudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studiji = Studio::all();
        return StudioResurs::collection($studiji);  
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
        $validator = Validator::make($request->all(),[
            'naziv_studija'=>'required',
            'lokacija'=>'required',
            'grad'=>'required',
            'broj_clanova'=>'required'
        ]);
        if ($validator->fails()){
            return response()->json(['Error!',$validator->errors()]);
        }

        $studio = Studio::create([
            'naziv_studija'=>$request->naziv_studija,
            'lokacija'=>$request->lokacija,
            'grad'=>$request->grad,
            'broj_clanova'=>$request->broj_clanova
        ]);
        return response()->json(['Successfully saved!', new StudioResurs($studio)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show(Studio $studio)
    { 
        return new StudioResurs($studio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        $studio->delete();
        return response()->json(['Uspesno obrisano!']);
    }
}
