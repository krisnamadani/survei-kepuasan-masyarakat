<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'age',
        'email',
        'education',
        'occupation',
        'institution',
        'services',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'answer5',
        'answer6',
        'answer7',
        'answer8',
        'answer9',
        'comment'
    ];

    protected $casts = [
        'services' => 'array'
    ];
}
