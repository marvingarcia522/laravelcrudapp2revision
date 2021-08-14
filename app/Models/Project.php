<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    protected $casts = [
        'rating' => 'float'
    ];

    protected $fillable = [
        'output',
        'indicator',
        'accomplishment',
        'created_at',
        'remarks',
        'ratingq1',
        'ratinge2',
        'ratingt3'
        
    ];
}