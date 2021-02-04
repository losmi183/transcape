<?php

namespace Database\Seeders;

use App\Models\Release;
use Illuminate\Database\Seeder;

class ReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 12; $i++) {
            Release::create([
                'artist' => 'Relativ',
                'slug' => 'bambre',
                'title' => 'Bambre',
                'cover' => '/images/releases/rel-'.$i.'.jpg',
                'release_date' => now(),
                'beatport' => 'https://www.beatport.com/track/bambre-original-mix/14461016',
                'soundcloud' => 'https://soundcloud.com/transcape-records/relativ-i-460-bambre'
            ]);
        }
    }
}
