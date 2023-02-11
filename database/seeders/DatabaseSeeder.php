<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $question= \App\Models\Test::factory()->create([
            'answer1' => 'Сакура',
            'answer2' => 'Фиалка',
            'answer3' => 'Пион',
            'right_answer1' => 'Сакура',
            'question' =>'Какой национальный цветок Японии?',
          
        ]);
        $question= \App\Models\Test::factory()->create([
            'answer1' => 'инков',
            'answer2' => 'ацтеков',
            'answer3' => 'египтян',
            'right_answer1' => 'инков',
            'question' =>'В какой из следующих империй не было письменности?',
           
        ]);
       
        $question= \App\Models\Test::factory()->create([
            'answer1' => 'Алексей Леонов',
            'answer2' => 'Алексей Леонов',
            'answer3' => 'Гагарин',
            'right_answer1' => 'Гагарин',
            'right_answer2' => 'Гагарин',
            'question' =>' Кто из людей первым в мире полетел в космос?',
           
        ]);




    }
}
