<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\Status;
use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PushSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projects::insert([
            ["name" => "Первый проект"],
            ["name" => "Второй проект"],
            ["name" => "Третий проект"],
            ["name" => "Четвертый проект"]
        ]);


        Status::insert([
            ["name" => "Новая"],
            ["name" => "Выполняется"],
            ["name" => "Тестирование"],
            ["name" => "Завершена"]
        ]);

        Types::insert([
            ["name" => "Пожелание"],
            ["name" => "Ошибка"],
            ["name" => "Авария"],
        ]);


    }
}
