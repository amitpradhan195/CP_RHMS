<?php

namespace App\Http\Controllers;

use App\addItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;
use Session;

class AddItemController extends Controller
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
    public function create(Request $request)
    {
        $pictureInfo = $request->file('img');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "itemImages/";

        $pictureInfo->move($folder,$picName);

        $picUrl = $folder.$picName;
        if(addItem::where('img', '=', $picUrl)->exists()) 
        {
            return redirect('/addItem')->with('itemNameExists','Please!!insert image with another name');
        }

        else
        {

            $Item = new addItem;

            $Item->itemType = $request->itemType;
            $Item->brand = $request->brand;
            $Item->modelName = $request->modelName;
            $Item->cc = $request->cc;
            $Item->cylinder = $request->cylinder;
            $Item->noOfGears = $request->noOfGears;
            $Item->mileage = $request->mileage;
            $Item->frontBrake = $request->frontBrake;
            $Item->rearBrake = $request->rearBrake;
            $Item->ABS = $request->ABS;
            $Item->fuelType = $request->fuelType;
            $Item->price = $request->price;
            $Item->img = $picUrl;
            $Item->modelYear = $request->modelYear;
            $Item->description = $request->description;    

            $Item->save();

            return redirect('/addItem')->with('itemAdded','Item added successfully');
        }
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
     * @param  \App\addItem  $addItem
     * @return \Illuminate\Http\Response
     */
    public function show(addItem $addItem)
    {
    //     $items=DB::table('tbl_items')->orderBy('itemId')->chunk(2,function ($items) {
    // });
    //     return redirect()->to('/products', ['petani' => $petani]);

        $itemDetails = DB::table('tbl_items')->get()->toArray();
        return view('/products', compact('itemDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addItem  $addItem
     * @return \Illuminate\Http\Response
     */
    public function edit(addItem $addItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addItem  $addItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addItem $addItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addItem  $addItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(addItem $addItem)
    {
        //
    }
}