<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("visits")->insert([
            ["type" => "arrival", "employee_id" => "1", "created_at" => "2021-07-10 10:13:54", "updated_at" => "2021-07-10 10:13:54"],
            ["type" => "arrival", "employee_id" => "2", "created_at" => "2021-07-10 10:15:27", "updated_at" => "2021-07-10 10:15:27"],
            ["type" => "departure", "employee_id" => "1", "created_at" => "2021-07-10 19:25:54", "updated_at" => "2021-07-10 19:25:54"],
            ["type" => "departure", "employee_id" => "2", "created_at" => "2021-07-10 19:30:27", "updated_at" => "2021-07-10 19:30:27"],

            ["type" => "arrival", "employee_id" => "3", "created_at" => "2021-07-10 10:46:02", "updated_at" => "2021-07-10 10:46:02"],
            ["type" => "arrival", "employee_id" => "4", "created_at" => "2021-07-10 11:18:38", "updated_at" => "2021-07-10 11:18:38"],
            ["type" => "departure", "employee_id" => "3", "created_at" => "2021-07-10 22:30:02", "updated_at" => "2021-07-10 22:30:02"],
            ["type" => "departure", "employee_id" => "4", "created_at" => "2021-07-10 23:45:38", "updated_at" => "2021-07-10 23:45:38"],

            ["type" => "arrival", "employee_id" => "5", "created_at" => "2021-07-10 11:18:49", "updated_at" => "2021-07-10 11:18:49"],
            ["type" => "arrival", "employee_id" => "6", "created_at" => "2021-07-10 11:30:00", "updated_at" => "2021-07-10 11:30:00"],
            ["type" => "departure", "employee_id" => "5", "created_at" => "2021-07-10 23:15:49", "updated_at" => "2021-07-10 23:15:49"],
            ["type" => "departure", "employee_id" => "6", "created_at" => "2021-07-10 23:40:00", "updated_at" => "2021-07-10 23:40:00"],
        ]);
    }
}
