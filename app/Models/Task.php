<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function task_type()
    {
    	return $this->belongsTo('\App\Models\TaskType','task_type_id');
    }
}
