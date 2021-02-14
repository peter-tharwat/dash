<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function employee()
    {
    	return $this->belongsTo('\App\Models\User','employee_id');
    }
}
