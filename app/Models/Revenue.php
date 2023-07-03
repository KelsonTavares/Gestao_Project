<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'user_id',
        'project_id',
    ];

}
