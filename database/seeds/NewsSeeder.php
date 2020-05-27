<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
        
    }

    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

        $date = [];
        for ($i = 0; $i < 10; $i++) {

            $date[] = [
                'title' =>  $faker->sentence(rand(3,10)),

                'inform' => $faker->realText(rand(100,200)),

                'is_private' => (boolean)rand(0,1)
            ];
        }
        return $date;
    }
}
