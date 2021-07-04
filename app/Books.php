<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public $fillable = ["category_id","libelle","auteur","description"];
    public function category()
    {
        return $this->belongTo(Category::class);
    }
    //
}
