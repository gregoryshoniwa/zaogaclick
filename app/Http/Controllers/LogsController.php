<?php

namespace App\Http\Controllers;

use App\logs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Http\Resources\log as logsResource;


class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all logs
        $logs = logs::paginate(15);

        //return the collection of employees as a resource
        return logsResource::collection($logs);


    }


    public function store(Request $request)
    {
        //
        $log = $request->isMethod('put') ? logs::findOrFail($request->log_id) : new logs;

        $log->id = $request->input('log_id');
        $log->table = $request->input('table');
        $log->from = $request->input('from');
        $log->to = $request->input('to');
        $log->user_id = $request->input('user_id');

        $log->created_at = $request->input('created_at');
        $log->updated_at = $request->input('updated_at');

        if($log->save()){
            return new logResource($log);
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
        //Get log
        $log = logs::findOrFail($id);
        //Return the single transfer as a resource
        return new logResource($log);
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
         //delete log
         $log = logs::findOrFail($id);
         //Return the single transfer as a resource
         if($log->delete()){
            return new logResource($log);
         }

    }
}
