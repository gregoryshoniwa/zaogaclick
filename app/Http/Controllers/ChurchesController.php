<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\churches;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Http\Resources\church as churchResource;

class ChurchesController extends Controller
{
    public function index()
    {
        //Get all churches
        $church = churches::paginate(15);

        //return the collection of employees as a resource
        return churchResource::collection($church);

    }


 /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


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
        $church = $request->isMethod('put') ? churches::findOrFail($request->church_id) : new churches;

        $church->id = $request->input('church_id');
        $church->employee_id = $request->input('name');
        $church->category = $request->input('password');
        $church->category_name = $request->input('remember_token');
        $church->category_date = $request->input('province');

        $church->category = $request->input('current_pastor_id');
        $church->category_name = $request->input('current_sec_id');
        $church->category_date = $request->input('address');
        $church->category = $request->input('email');
        $church->category_name = $request->input('coodinates');
        $church->category_date = $request->input('contacts');

        $church->category = $request->input('profile');
        $church->category_name = $request->input('church_id');


        $church->user_id = $request->input('user_id');

        $church->created_at = $request->input('created_at');
        $church->updated_at = $request->input('updated_at');

        if($church->save()){
            return new churchResource($church);
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
        $church = churches::findOrFail($id);
        //Return the single transfer as a resource
        return new churchResource($church);
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
         $church = churches::findOrFail($id);
         //Return the single transfer as a resource
         if($church->delete()){
            return new churchResource($church);
         }

    }
}
