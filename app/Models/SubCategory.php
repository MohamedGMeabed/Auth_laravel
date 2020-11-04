<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = "sub_categories";
    protected $fillable = ['name','main_cat_id'];
    
    public function MainCategory(){
        return $this->belongsTo('App\Models\MainCategory','main_cat_id');
    }

    public function SubCatNews(){
        return $this->hasMany('App\Models\News','sub_cat_id');
    }
    
}
