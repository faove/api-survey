<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('surveys')->insert([
            'title_survey' => 'Encuesta de Tequeños',
            'category_survey' => 'Alimentos',
            'quantity_survey' => 1,
            'active_survey' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
