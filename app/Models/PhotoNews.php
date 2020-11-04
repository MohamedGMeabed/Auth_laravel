<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoNews extends Model
{
    use HasFactory;

    protected $table = "photo_news";
    protected $fillable = ['photo','news_id'];


    public function News(){
        return $this->belongsTo('App\Models\News','news_id');
    }
}
