<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_A extends Model
{
    use HasFactory;
    protected $table = 'group_a_players';
    protected $fillable = [
        'name',
        'age',
        'email',
        'town',
        'rno',
        'card',
        'faculty',
        'postures',
        'balling_postures',
        'batting_side',
        'bolling_hand'
    ];
}
