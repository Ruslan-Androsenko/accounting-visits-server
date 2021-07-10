<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("employees")->insert([
            ["surname" => "Иванов", "name" => "Константин", "patronymic" => "Николаевич", "phone" => "+7_(444)_444-44-44", "personnel_number" => "2222-2222"],
            ["surname" => "Петров", "name" => "Игорь", "patronymic" => "Иванович", "phone" => "+7_(444)_444-33-44", "personnel_number" => "2222-2233"],
            ["surname" => "Заречный", "name" => "Семен", "patronymic" => "Степанович", "phone" => "+7_(435)_454-35-43", "personnel_number" => "3454-3548"],
            ["surname" => "Некрасов", "name" => "Николай", "patronymic" => "Петрович", "phone" => "+7_(224)_234-32-43", "personnel_number" => "4234-2343"],
            ["surname" => "Сидоров", "name" => "Петр", "patronymic" => "Сергеевич", "phone" => "+7_(432)_423-42-34", "personnel_number" => "3432-4324"],
            ["surname" => "Семенов", "name" => "Анатолий", "patronymic" => "Викторович", "phone" => "+7_(554)_354-35-43", "personnel_number" => "3454-3543"],
        ]);
    }
}
