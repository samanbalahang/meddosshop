<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\admin\CatFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\HelperController;

class dashCatFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $helper                    = new  HelperController;
        $Feature_name              = $request->Feature_name;
        $Feature_values            = json_encode($request->Feature_values, JSON_UNESCAPED_UNICODE);
        $request["Feature_name"]   = $Feature_name;
        $request["Feature_values"] = $Feature_values;
        $bazgasht =  CatFeature::create($request->all());
        if($bazgasht){
            return $helper->result_msg("done");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CatFeature $catFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatFeature $catFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatFeature $catFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatFeature $catFeature)
    {
        //
    }
}
