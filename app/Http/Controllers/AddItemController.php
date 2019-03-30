<?php

namespace App\Http\Controllers;

use App\addItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;

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

            $Item->itemTypeId = $request->itemType;
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

        $itemDetails = DB::table('tbl_items')
        ->join('tbl_item_type','tbl_item_type.id','=','tbl_items.itemTypeId')
        ->get()
        ->toArray();
        
        return view('/products', compact('itemDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addItem  $addItem
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //For edit item in update item blade
            if ($request->isMethod('get')) 
            {
                $items=DB::table('tbl_items')
                    ->join('tbl_item_type','tbl_item_type.id','=','tbl_items.itemTypeId')
                    ->where('tbl_items.itemId','=', $request->id )
                    ->get();

                return json_encode($items);
            }

            else
            {
                return "Not Found";
            }
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

        $pictureInfo = $request->file('img');

        if($pictureInfo)
        {
            $picName = $pictureInfo->getClientOriginalName();

            $folder = "itemImages/";

            $pictureInfo->move($folder,$picName);

            $picUrl = $folder.$picName;

            if(addItem::where('img', '=', $picUrl)->exists()) 
            {
                return redirect('/addItem')->with('itemNameExists','Please!!insert image with another name');
            }

            else{
                DB::table('tbl_items')
                ->where('itemId', $request->itemId)
                ->update(['itemTypeId' => $request->itemType, 'brand' => $request->brand, 'modelName' => $request->modelName,
                 'cc' => $request->cc, 'cylinder' => $request->cylinder, 'noOfGears' => $request->noOfGears, 'mileage' => $request->mileage,
                 'frontBrake' => $request->frontBrake, 'rearBrake' => $request->rearBrake, 'fuelType' => $request->fuelType, 'ABS' => $request->ABS, 'price' => $request->price, 'img' => $picUrl, 'modelYear' => $request->modelYear, 'description' => $request->description]);
            }
        }
        

        else
        {
            DB::table('tbl_items')
                ->where('itemId', $request->itemId)
                ->update(['itemTypeId' => $request->itemType, 'brand' => $request->brand, 'modelName' => $request->modelName,
                 'cc' => $request->cc, 'cylinder' => $request->cylinder, 'noOfGears' => $request->noOfGears, 'mileage' => $request->mileage,
                 'frontBrake' => $request->frontBrake, 'rearBrake' => $request->rearBrake, 'fuelType' => $request->fuelType, 'ABS' => $request->ABS, 'price' => $request->price, 'modelYear' => $request->modelYear, 'description' => $request->description]);
        }

        return redirect()->to('/updateItem')->with('updatedItem', 'Item updated successfully');
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
