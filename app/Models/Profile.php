<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }

    public function technicalSkills()
    {
        return $this->hasMany(TechnicalSkill::class);
    }

    public function softSkills()
    {
        return $this->hasMany(SoftSkill::class);
    }
}