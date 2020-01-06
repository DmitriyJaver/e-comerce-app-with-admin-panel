<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            [
                'id'    => 1,
                'name' => 'Red',
            ],
            [
                'id'    => 2,
                'name' => 'Blue',
            ],
            [
                'id'    => 3,
                'name' => 'Black',
            ],
            [
                'id'    => 4,
                'name' => 'White',
            ],
            [
                'id'    => 5,
                'name' => 'Green',
            ],
        ];

        Color::insert($colors);
    }
}
