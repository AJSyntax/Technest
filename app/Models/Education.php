<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';

    protected $fillable = [
        'portfolio_id',
        'institution',
        'degree',
        'field_of_study',
        'description',
        'start_date',
        'end_date',
        'is_current',
        'location',
        'order'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
} 