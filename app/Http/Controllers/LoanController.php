<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Loan;
use DataTables;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$loan = Loan::get();
        //return view('Loans.index')->with(compact('loan'));
        
        $loan = Loan::first()->get();
        
        if ($request->ajax()) {
            $data = Loan::first()->get();
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
      
        return view('Loans.index')->with(compact('loan'));
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
        Loan::updateOrCreate(['id' => $request->loan_id],
                ['loancode' => $request->loancode,'pdrp_id' => $request->pdrp_id,'serial' => $request->serial, 'channel' => $request->channel, 'idinventary' => $request->idinventary, 'estimateddate' => $request->estimateddate, 'realreturn' => $request->realreturn, 'dateloan' => $request->dateloan, 'state' => $request->state, 'pastdays' => $request->pastdays, 'observation' => $request->observation]);

        return response()->json(['success' => 'loan Registrado correctamente']);
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
        $loan = Loan::find($id);
        return response()->json($loan);
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
        $loan = Loan::findOrFail($id);
        $loan->delete();
     
        return response()->json(['success'=>'loan deleted successfully.']);
    }
}
