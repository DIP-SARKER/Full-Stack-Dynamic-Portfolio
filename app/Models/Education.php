<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
    protected $fillable =[
        'type',
        'name',
        'institute',
        'enrolled_year',
        'passing_year',
        'grade',
    ];
}
