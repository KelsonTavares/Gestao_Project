<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    #protected $with = ['user'];

    protected $fillable = [
        'name',
        'deadline',
        'budget',
        'description',
        'comments',
        'user_id',
        'tenant_id',
    ];

    public function riskManagements()
    {
        return $this->hasMany(RiskManagement::class);
    }

    public function problems()
    {
        return $this->hasMany(Problem::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function performanceReports()
    {
        return $this->hasMany(PerformanceReport::class);
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function projectTeams()
    {
        return $this->hasMany(ProjectTeam::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function revenues()
    {
        return $this->hasMany(Revenue::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
