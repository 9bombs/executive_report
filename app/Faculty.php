<?php

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faculties';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description',
    ];

     /**
     * Get all patients of the advisor.
     */
    public function patients()
    {
        return $this->hasMany('App\Wellness\Patient','advisor_id','id');
    }
}
