<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $shops = \App\Models\Shop::factory(20)->create();

        \App\Models\User::factory(20)->create()->each(function ($user) use ($shops) {
            $user->cards()->saveMany(\App\Models\Card::factory(3)->make());

            $user->cards->each(function ($card) use ($shops) {
                $card->payments()->saveMany(\App\Models\Payment::factory(10)->make([
                    'shop_id' => $shops->random()->id,
                ]));
            });
        });
    }
}
