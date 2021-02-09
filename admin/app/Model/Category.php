<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;
	
    protected $table 	   = "category";
    protected $primaryKey  = "id";

    protected $fillable = [
		"category",
		"category_image"
    ];
}
