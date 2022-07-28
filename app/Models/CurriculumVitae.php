<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumVitae extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'job_title',
        'birth_of_date',
        'enterprise_name',
        'enterprise_from',
        'enterprise_to',
        'enterprise_notes',
        'experience_name',
        'experience_from',
        'experience_to',
        'experience_notes',
        'user_id',
    ];

}
