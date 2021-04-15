<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Channel;
use App\Loan;
use DB;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChartLoanChannels()
    {

        $loans = DB::table('loan')
        ->select('channel', DB::raw('count(channel) as count'))
        ->groupBy('channel')
        ->where('state', '=', 'taken');
       

        $ChannelFull = DB::table('channel')
        ->joinSub($loans, 'loans_channel', function ($join){
            $join->on('channel.id', '=', 'loans_channel.channel');
        })->get();
        $ChannelFull = json_decode(json_encode($ChannelFull),true);
     
        return view('charts.index')->with(compact('ChannelFull')); 
    }

    
}
