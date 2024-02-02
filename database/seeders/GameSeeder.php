<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'title' => 'Fortnite',
                'description' => 'descrizione lunga',
                'thumb' => 'ulr img',
                'type_id' => '1'
            ],
            [
                'title' => 'Call Of Duty Modern Warfare',
                'description' => 'descrizione lunga 2',
                'thumb' => 'ulr img 2',
                'type_id' => '1'
            ],
        ];
        foreach ($games as $game) {

            $new_game = new Game();
            $new_game->title = $game['title'];
            $new_game->description = $game['description'];
            $new_game->thumb =  $game['thumb'];
            $new_game->type_id = $game['type_id'];
            $new_game->save();
        }
    }
}
