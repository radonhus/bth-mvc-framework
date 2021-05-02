<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highscore extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get all highscores from highscores table in database.
     *
     * @property  array  $highscores
     * @property object $highscore
     * @return array $highscores
     */
    public function getAllHighscores()
    {

        $highscoresSorted = Highscore::orderByDesc('score')->limit(10)->get();
        $highscoresArray = [];
        $rank = 0;

        foreach ($highscoresSorted as $highscore) {
            $rank += 1;
            array_push($highscoresArray, [
                'rank' => $rank,
                'player' => $highscore->player,
                'score' => $highscore->score,
                'date_played' => substr($highscore->date_played, 0, 10)
            ]);
        }

        return $highscoresArray;
    }
}
