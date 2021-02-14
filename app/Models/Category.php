<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function cetegory()
    {
    	return $this->belongsTo('\App\Models\Category','cetegory_id');
    }
}
