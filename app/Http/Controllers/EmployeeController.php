<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Employee::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $employee = Employee::firstOrCreate($request->Employee ?? []);

            $response = [
                'message' => 'Запись успешно создана',
                'success' => true,
                'employee' => $employee,
            ];
        } catch (\Exception $ex) {
            $response = [
                'message' => $ex->getMessage(),
                'success' => false,
            ];
        }

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(Employee::find($id));
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
        try {
            Employee::find($id)->update($request->Employee ?? []);

            $response = [
                'message' => 'Запись успешно сохранена',
                'success' => true,
            ];
        } catch (\Exception $ex) {
            $response = [
                'message' => $ex->getMessage(),
                'success' => false,
            ];
        }

        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Employee::destroy($id);

            $response = [
                'message' => 'Запись успешно удалена',
                'success' => true,
            ];
        } catch (\Exception $ex) {
            $response = [
                'message' => $ex->getMessage(),
                'success' => false,
            ];
        }

        return response($response);
    }
}
