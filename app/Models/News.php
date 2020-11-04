<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $fillable = ['title','details','auther','tags','sub_cat_id'];

    public function SubCategory(){
        return $this->belongsTo('App\Models\SubCategory','sub_cat_id');
    }

    public function NewsPhotos(){
        return $this->hasMany('App\Models\PhotoNews','news_id');
    }
    
}

