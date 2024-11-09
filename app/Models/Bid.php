<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'user_id',
        'amount',
        'number',
        'type',
        'number_2',
        'session'
    ];


    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function winner()
    {
        return $this->belongsTo(Winner::class, 'id', 'bid_id');
    }

    static $single_ank = 'single_ank';
    static $jodi = 'jodi';
    static $single_patti = 'single_patti';
    static $double_patti = 'double_patti';
    static $triple_patti = 'triple_patti';
    static $half_sangam = 'half_sangam';
    static $full_sangam = 'full_sangam';


}
