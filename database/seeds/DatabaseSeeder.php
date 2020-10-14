<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\ShortenerUrl;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param $items
     * @return void
     */
    public function run()
    {
        factory(ShortenerUrl::class, 15)->create();
    }
}
