<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\churchlist;
use App\ministrylist;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Http\Resources\churchlist as churchlistResource;

class ChurchlistController extends Controller
{
    public function seletordata()
    {
        $churches = churchlist::all();
        $ministies = ministrylist::all();
        return view('welcome',['churches'=>$churches])->with('ministies', $ministies);;


    }




    public function index()
    {
        //Get all churches
        $churchlist = churchlist::paginate(15);

        //return the collection of employees as a resource
        return churchlistResource::collection($churchlist);

    }



    public function store(Request $request)
    {
        //
        $churchlist = $request->isMethod('put') ? churchlist::findOrFail($request->churchlist_id) : new churchlist;

        $churchlist->id = $request->input('church_id');
        $churchlist->employee_id = $request->input('name');
        $churchlist->category = $request->input('code');


        if($churchlist->save()){
            return new churchlistResource($churchlist);
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
        $churchlist = churchlist::findOrFail($id);
        //Return the single transfer as a resource
        return new churchlistResource($churchlist);
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
         $churchlist = churchlist::findOrFail($id);
         //Return the single transfer as a resource
         if($churchlist->delete()){
            return new churchlistResource($churchlist);
         }

    }
}
