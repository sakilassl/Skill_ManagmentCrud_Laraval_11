<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id', 
        'programming_language', 
        'frontend_language', 
        'testing_tools', 
        'project_management_tools', 
        'graphic_designing_skills'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
