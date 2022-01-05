<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'dob',
        'phone',
        'address',
        'majorid',
    ];
    public function major()
    {
        return $this->belongsTo(Major::class,'majorid','id');
    }
}
