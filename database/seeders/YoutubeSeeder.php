<?php

namespace Database\Seeders;

use App\Models\Youtube;
use Illuminate\Database\Seeder;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Youtube::create([
            'link' => 'https://www.youtube.com/embed/sjUhEK426xo'
        ]);
        Youtube::create([
            'link' => 'https://www.youtube.com/embed/zlOZvsmlTTA'
        ]);
        Youtube::create([
            'link' => 'https://www.youtube.com/embed/OfgSTRhMwj4'
        ]);
    }
}
