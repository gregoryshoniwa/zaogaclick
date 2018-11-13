<?php

namespace App\Http\Controllers;

use App\cvs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Http\Resources\cv as cvResource;

class CvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //Get all logs
        $cvs = cvs::paginate(15);

        //return the collection of employees as a resource
        return cvResource::collection($cvs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $cv = $request->isMethod('put') ? cvs::findOrFail($request->cv_id) : new cvs;

        $cv->id = $request->input('cv_id');
        $cv->employee_id = $request->input('employee_id');
        $cv->category = $request->input('category');
        $cv->category_name = $request->input('category_name');
        $cv->category_date = $request->input('category_date');

        $cv->user_id = $request->input('user_id');

        $cv->created_at = $request->input('created_at');
        $cv->updated_at = $request->input('updated_at');

        if($cv->save()){
            return new cvResource($cv);
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
        $cv = cvs::findOrFail($id);
        //Return the single transfer as a resource
        return new cvResource($cv);
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
         $cv = cvs::findOrFail($id);
         //Return the single transfer as a resource
         if($cv->delete()){
            return new cvResource($cv);
         }

    }
}
