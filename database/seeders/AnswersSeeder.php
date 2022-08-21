<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Pregunta 1
        DB::table('answers')->insert([
            'question_id' => 1,
            'answer' => 'Muy Malos',
            'answer_value' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 1,
            'answer' => 'Malos',
            'answer_value' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 1,
            'answer' => 'Buenos',
            'answer_value' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 1,
            'answer' => 'Muy Buenos',
            'answer_value' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //Pregunta 2
        DB::table('answers')->insert([
            'question_id' => 2,
            'answer' => 'Queso',
            'answer_value' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 2,
            'answer' => 'Queso con Jamón',
            'answer_value' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 2,
            'answer' => 'Chocolate',
            'answer_value' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 2,
            'answer' => 'Queso con Chocolate',
            'answer_value' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //Pregunta 3
        DB::table('answers')->insert([
            'question_id' => 3,
            'answer' => 'Supermercado',
            'answer_value' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 3,
            'answer' => 'Facebook',
            'answer_value' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 3,
            'answer' => 'Instagram',
            'answer_value' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('answers')->insert([
            'question_id' => 3,
            'answer' => 'Otro',
            'answer_value' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
