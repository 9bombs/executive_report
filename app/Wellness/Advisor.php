<?php

namespace App\Wellness;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wn_advisors';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'phone',
    ];

     /**
     * Get all patients of the advisor.
     */
    public function patients()
    {
        return $this->hasMany('App\Wellness\Patient','advisor_id','id');
    }
}
