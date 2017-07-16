<?php

namespace App\Wellness;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wn_symptom';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'is_severe',
        'note',
    ];
}
