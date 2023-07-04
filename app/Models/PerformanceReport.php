<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'progress',
        'expenses',
        'revenues',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
