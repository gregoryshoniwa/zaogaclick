<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\accounts;


use App\Http\Requests;

use App\Http\Resources\account as accountResource;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accounts = accounts::paginate(15);

        //return the collection of employees as a resource
        return accountResource::collection($accounts);


    }

    public function store(Request $request)
    {
        //
        $account = $request->isMethod('put') ? churches::findOrFail($request->account_id) : new accounts;

        $account->id = $request->input('account_id');
        $account->description_id = $request->input('description');
        $account->debt = $request->input('debt');
        $account->credit = $request->input('credit');
        $account->balance = $request->input('balance');
        $account->employee_id = $request->input('employee_id');


        $account->user_id = $request->input('user_id');

        $account->created_at = $request->input('created_at');
        $account->updated_at = $request->input('updated_at');

        if($account->save()){
            return new churchResource($account);
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
        $account = accounts::findOrFail($id);
        //Return the single transfer as a resource
        return new accountResource($account);
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
         $account = accounts::findOrFail($id);
         //Return the single transfer as a resource
         if($account->delete()){
            return new accountResource($account);
         }

    }
}
