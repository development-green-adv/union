<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    
    protected $fillable = [

        'id_category',
        'subcategry_name',
        'alias',
        'subcategory_keywords',
        'subcategory_description',
        'status',
        'lang'        

    ];

}
