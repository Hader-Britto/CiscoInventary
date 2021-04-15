<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Channel;
use DataTables;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $channels = Channel::select(
            'channels.id',
            'channels.channel as channel'

        )
        ->get();
        return view('channels.index')->with(compact('channel'));

        /* $channels = Channel::first()->get();
        
       if ($request->ajax()) {
            $data = Channel::first()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a ref="javascript:void(0)" data-toggle="modal" data-target="#ajaxModel"  data-id="'.$row->id.'" data-original-title="Edit" class="far fa-edit editbtn"  style="color: #009bdd;">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="far fa-trash-alt deletebtn"  style="color: #009bdd;">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('Channels.index')->with(compact('channel'));*/
        
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
       Channel::updateOrCreate(['id' => $request->channel_id],
                ['nchannel' => $request->nchannel]);

        return response()->json(['success' => 'canal Registrado correctamente']);
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
        $channel = Channel::find($id);
        return response()->json($channel);
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
        $channel = Channel::findOrFail($id);
        $channel->delete();
     
        return response()->json(['success'=>'Inventary deleted successfully.']);
    }
}
