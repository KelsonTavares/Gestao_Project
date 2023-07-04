<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'mitigation_strategy',
        'probability',
        'impact',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
