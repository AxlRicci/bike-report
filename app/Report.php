<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // Set relationship between each report and a single user.
    public function user(){
        return $this->belongsTo('App\User');
    }
}
