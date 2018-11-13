<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\transfers;

use App\Http\Requests;

use App\Http\Resources\transfer as transferResource;

class TransfersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get All transfers
        $transfers = transfers::paginate(15);

        //return the collection of employees as a resource
        return transferResource::collection($transfers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $transfer = $request->isMethod('put') ? transfers::findOrFail($request->transfer_id) : new transfers;

        $transfer->id = $request->input('transfer_id');
        $transfer->from = $request->input('from');
        $transfer->to = $request->input('to');
        $transfer->from_post = $request->input('from_post');
        $transfer->to_post = $request->input('to_post');
        $transfer->employee_id = $request->input('employee_id');
        $transfer->user_id = $request->input('user_id');
        $transfer->created_at = $request->input('created_at');
        $transfer->updated_at = $request->input('updated_at');

        if($transfer->save()){
            return new transferResource($transfer);
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
        //Get transfer
        $transfer = transfers::findOrFail($id);
        //Return the single transfer as a resource
        return new transferResource($transfer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         //delete transfer
         $transfer = transfers::findOrFail($id);
         //Return the single transfer as a resource
         if($transfer->delete()){
            return new transferResource($transfer);
         }

    }
}
