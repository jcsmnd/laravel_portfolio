<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Inventory;
use App\Http\Resources\Inventory as InventoryResource;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inven = Inventory::paginate(15);

        return InventoryResource::collection($inven);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inven = $request->isMethod('put') ? Inventory::findOrFail($request->article_id) : new Inventory;

        $inven->id = $request->input('article_id');
        $inven->sku = $request->input('sku');
        $inven->qty = $request->input('qty');
        $inven->amt = $request->input('amt');
        $inven->product_name = $request->input('product_name');
        $inven->product_desc = $request->input('product_desc');

        if($inven->save()){
            return new InventoryResource($inven);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inven = Inventory::findOrFail($id);

        return new InventoryResource($inven); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inven = Inventory::findOrFail($id);

        if($inven->delete()){
            return new InventoryResource($inven);
        }
    }
}
