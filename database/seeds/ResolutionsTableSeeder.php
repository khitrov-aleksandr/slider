<?php

use Illuminate\Database\Seeder;
use App\Resolution;

class ResolutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resolution::insert([
            [
                'id' => 1,
                'size' => "1920x1080"
            ],
            [
                'id' => 2,
                'size' => "1280x1024"
            ],
            [
                'id' => 3,
                'size' => "768x1366"
            ]
        ]);
    }
}
