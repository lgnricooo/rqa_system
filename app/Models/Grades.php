<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;

    protected $table = 'user_grades';
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'con_number',
        'address',
        'major',
        'education',
        'teaching_exp',
        'st_skills',
        'interview',
        'demo_teach',
        'comm_skills',
        'total',
        'let_pbet',
    ];
}
