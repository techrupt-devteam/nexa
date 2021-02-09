<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
	use SoftDeletes;
	
    protected $table 	   = "status";
    protected $primaryKey  = "id";

    protected $fillable = [
		"status"
    ];
}
