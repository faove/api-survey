<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
            'survey_id' => 1,
            'question' => '¿Cómo valorarías nuestros tequeños?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'survey_id' => 2,
            'question' => '¿Que sabores de tequeños te gustan más?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'survey_id' => 3,
            'question' => '¿Cómo oíste hablar de nosotros?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);        
    }
}
