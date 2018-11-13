<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ministrylist;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Http\Resources\churchlist as ministrylistResource;

class MinistrylistController extends Controller
{
    public function seletordata()
    {
        $ministries = ministrylist::all();
        return view('welcome',['ministries'=>$ministries]);
    }




    public function index()
    {
        //Get all churches
        $ministrylist = ministrylist::paginate(15);

        //return the collection of employees as a resource
        return ministrylistResource::collection($ministrylist);

    }



    public function store(Request $request)
    {
        //
        $ministrylist = $request->isMethod('put') ? churchlist::findOrFail($request->ministrylist_id) : new ministrylist;

        $ministrylist->id = $request->input('church_id');
        $ministrylist->employee_id = $request->input('name');
        $ministrylist->category = $request->input('code');


        if($ministrylist->save()){
            return new ministrylistResource($ministrylist);
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
        $ministrylist = ministrylist::findOrFail($id);
        //Return the single transfer as a resource
        return new ministrylistResource($ministrylist);
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
         $ministrylist = ministrylist::findOrFail($id);
         //Return the single transfer as a resource
         if($ministrylist->delete()){
            return new ministrylistResource($ministrylist);
         }

    }
}
