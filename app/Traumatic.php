<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traumatic extends Model
{
    protected $fillable = [
        'name',
        'email',
        'gender',
        'occupation',
        'type_of_contract',
        'user_id',
        'status',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7',
        'question_8',
        'question_9',
        'question_10',
        'question_11',
        'question_12',
        'question_13',
        'question_14',
        'question_15',
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
