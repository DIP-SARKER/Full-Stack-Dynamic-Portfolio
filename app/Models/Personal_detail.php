<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_detail extends Model
{
    use HasFactory;
    protected $fillable =[
        'description',
        'blood_group',
        'department',
        'age',
        'dob',
        'address',
        'gender'
    ];
}
