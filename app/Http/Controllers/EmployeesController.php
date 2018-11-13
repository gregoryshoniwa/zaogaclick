<?php

namespace App\Http\Controllers;

use App\employees;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Resources\employee as employeeResource;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get employees
        $employees = employees::paginate(15);

        //return the collection of employees as a resource
        return employeeResource::collection($employees);


    }


    public function store(Request $request)
    {
        //
        $employee = $request->isMethod('put') ? employees::findOrFail($request->employee_id) : new employees;

        $employee->id = $request->input('employee_id');
        $employee->table = $request->input('name');
        $employee->from = $request->input('national_id');
        $employee->to = $request->input('national_id_image');
        $employee->from = $request->input('drivers_id');
        $employee->to = $request->input('drivers_id_image');
        $employee->from = $request->input('passport_id');
        $employee->to = $request->input('passport_id_image');
        $employee->table = $request->input('mobile');
        $employee->table = $request->input('email');
        $employee->table = $request->input('sex');
        $employee->table = $request->input('marrital_status');
        $employee->table = $request->input('dob');
        $employee->table = $request->input('profile');
        $employee->table = $request->input('profile_image');
        $employee->user_id = $request->input('user_id');

        $employee->created_at = $request->input('created_at');
        $employee->updated_at = $request->input('updated_at');

        if($employee->save()){
            return new employeeResource($employee);
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
        //Get employee
        $employee = employees::findOrFail($id);
        //Return the single transfer as a resource
        return new employeeResource($employee);
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
         //delete employee
         $employee = employees::findOrFail($id);
         //Return the single transfer as a resource
         if($employee->delete()){
            return new employeeResource($employee);
         }

    }
}
