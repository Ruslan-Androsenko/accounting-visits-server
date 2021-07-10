<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;


class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $visits = Visit::with("employee");

        // Получаем поля для фильтрации и сортировки
        $filterDate = $request->input("filterDate") ?? "";
        $filterEmployee = $request->input("filterEmployee") ?? "";
        $orderByDate = $request->input("orderByDate") ?? "";

        // Фильтрация по дате
        if (!empty($filterDate)) {
            $visits->where("created_at", ">=", $filterDate . " 00:00:00");
            $visits->where("created_at", "<=", $filterDate . " 23:59:59");
        }

        // Фильтрация по сотруднику
        if (!empty($filterEmployee)) {
            $visits->where("employee_id", "=", $filterEmployee);
        }

        // Сортировка по дате
        switch ($orderByDate) {
            case "asc":
                $visits->orderBy("created_at");
                break;
            case "desc":
                $visits->orderByDesc("created_at");
                break;
        }

        return response($visits->get());
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
            $visit = Visit::create($request->Visit ?? []);

            $response = [
                "message" => "Запись успешно создана",
                "success" => true,
                "employee" => $visit,
            ];
        } catch (\Exception $ex) {
            $response = [
                "message" => $ex->getMessage(),
                "success" => false,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
