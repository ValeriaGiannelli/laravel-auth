<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $casts = [
        "start_date" => "datetime",
        "end_Date" => "datetime",
    ];

    protected $fillable = [
        'title',
        'project_type',
        'start_date',
        'end_date',
        'img',
        'slug',
        'description'
    ];
}
