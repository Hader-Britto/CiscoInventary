<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Inventory;
use DB;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $inventory = DB::table('inventory')
            ->join('channel', 'inventory.channel', '=', 'channel.id')
            ->select('inventory.*', 'channel.nchannel')
            ->get();

        return view('inventory.index')->with(compact('inventory'));
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
        $this->validate($request, [
            'section' => 'required',
            'position' => 'required',
            'state' => 'required',
            'product' => 'required',
            'pdrpid' => 'required',
            'serial' => 'required',
            'code' => 'required',
            'channel' => 'required',
            'observation' => 'required',
        ]);

        $inventory= new Inventory;

        $inventory->section =$request->input('section');
        $inventory->position =$request->input('position');
        $inventory->state =$request->input('state');
        $inventory->product =$request->input('product');
        $inventory->pdrpid =$request->input('pdrpid');
        $inventory->serial =$request->input('serial');
        $inventory->code =$request->input('code');
        $inventory->channel =$request->input('channel');
        $inventory->observation =$request->input('observation');
        
        $inventory->save(); 

        return redirect('/inventory')->with('success','Data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return redirect('/inventory')->with('success','Data saved');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, $id)
    {
        $inventary= Inventary::findOrFail($id);

        $inventary->section =$request->section;
        $inventary->position =$request->position;
        $inventary->state =$request->state;
        $inventary->product =$request->product;
        $inventary->pdrpid =$request->pdrpid;
        $inventary->serial =$request->serial;
        $inventary->code =$request->code;
        $inventary->channel =$request->channel;
        $inventary->observation =$request->observation;
        
        $inventary->save();
    }

    
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();
     
        return response()->json(['success'=>'Inventary deleted successfully.']);
    }
}
