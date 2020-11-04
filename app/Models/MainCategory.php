<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;

    protected $table = "main_categories";
    protected $fillable = ['name'];

    public function SUbCategory(){
        return $this->hasMany('App\Models\SubCategory','main_cat_id');
    }
}
