<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'department', 'designation', 'phone', 'salary'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function leave(){
     
        return $this->hasMany(Leave::class);
    }
}
