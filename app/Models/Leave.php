<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable=['employee_id','leave_type','leave_start_date','leave_end_date','half_or_full_day','reason','status'];
    
    public function employee(){
     
        return $this->belongsTo(Employee::class);
    }
}
