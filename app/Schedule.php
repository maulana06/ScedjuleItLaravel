<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule_entry';

    protected $fillable = ['subject', 'schedule_date', 'description','any_destination','from','to','id_user'];
}
