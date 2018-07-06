<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'pm_id', 'pl_id', 'description', 'start_date', 'end_date', 'kick_off', 'sign_off', 'status'
    ];
    
    public function pm_user()
    {
        return $this->belongsTo('App\User', 'pm_id');
    }
    
    public function pl_user()
    {
        return $this->belongsTo('App\User', 'pl_id');
    }
}
