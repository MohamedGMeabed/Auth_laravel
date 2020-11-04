<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EventRegisteration extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "event_registrations";
    protected $fillable = ['event_id','name','email','phone','ticket_type','status'];

    public function Events(){
        return $this->belongsTo('App\Models\Event');
    }

    public function event_id(){
        return $this->hasOne('App\Models\EventRegisteration')->where('event_id','events.id');
     }
}
