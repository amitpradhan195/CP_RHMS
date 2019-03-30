<?php

namespace App\Http\Controllers;

use App\addItemType;
use Illuminate\Http\Request;
use DB;
use Response;

class AddItemTypeController extends Controller
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
        
        $itemType = $request->itemType;

        $search = DB::table('tbl_item_type')->where('itemType', $itemType)->first();
        if(is_null($search))
        {
            $itemTypes = new addItemType;
            $itemTypes->itemType = $itemType;
            $itemTypes->save();
            return redirect()->back()->with('success','Item Type added successfully');
        }

        else
        {
            return redirect()->back()->with('fail','Item Type already exists'); 
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
     * Display the specified resource.-+-----
     *
     * @param  \App\addItemType  $addItemType
     * @return \Illuminate\Http\Response
     */
    public function show(addItemType $addItemType)
    {
        $search = DB::table('tbl_item_type')->get()->toArray();

        $itemDetails = DB::table('tbl_items')
        ->join('tbl_item_type','tbl_item_type.id','=','tbl_items.itemTypeId')
        ->get();
        return view('/addItem', compact('search','itemDetails'));
    }

    public function show2(addItemType $addItemType)
    {
        $search = DB::table('tbl_item_type')->get()->toArray();
        
        $itemDetails = DB::table('tbl_items')
        ->join('tbl_item_type','tbl_item_type.id','=','tbl_items.itemTypeId')
        ->get();
        return view('/updateItem', compact('search','itemDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addItemType  $addItemType
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

                // $brand = $items->brand;

                return json_encode($items);
            }

            else
            {
                return "Not Found";
            }

                // return view('updateItem', ['items' => $items]);

                // $html = view('updateItem')->with(compact('items'))->render();
                // return response()->json(['success' => true, 'html' => $html]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addItemType  $addItemType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addItemType $addItemType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addItemType  $addItemType
     * @return \Illuminate\Http\Response
     */
    public function destroy(addItemType $addItemType)
    {
        //
    }
}
