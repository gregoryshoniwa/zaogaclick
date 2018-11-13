<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ministries;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Http\Resources\ministry as ministryResource;

class MinistriesController extends Controller
{

    public function index()
    {
        //Get all ministries
        $ministry = ministries::paginate(15);

        //return the collection of employees as a resource
        return ministryResource::collection($ministry);

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }



    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function store(Request $request)
    {
        //
        $ministry = $request->isMethod('put') ? ministries::findOrFail($request->ministry_id) : new ministries;


        $ministry->id = $request->input('church_id');
        $ministry->employee_id = $request->input('name');
        $ministry->category = $request->input('password');
        $ministry->category_name = $request->input('remember_token');
        $ministry->category_date = $request->input('province');

        $ministry->category = $request->input('current_pastor_id');
        $ministry->category_name = $request->input('current_sec_id');
        $ministry->category_date = $request->input('address');
        $ministry->category = $request->input('email');
        $ministry->category_name = $request->input('coodinates');
        $ministry->category_date = $request->input('contacts');

        $ministry->category = $request->input('profile');
        $ministry->category_name = $request->input('church_id');


        $ministry->user_id = $request->input('user_id');

        $ministry->created_at = $request->input('created_at');
        $ministry->updated_at = $request->input('updated_at');


        if($ministry->save()){
            return new ministryResource($ministry);
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
        $ministry = ministries::findOrFail($id);
        //Return the single transfer as a resource
        return new ministryResource($ministry);
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
         $ministry = ministries::findOrFail($id);
         //Return the single transfer as a resource
         if($ministry->delete()){
            return new ministryResource($ministry);
         }

    }
}
