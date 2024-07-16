<?php

// app/Models/SoftSkill.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftSkill extends Model
{
    use HasFactory;

    protected $fillable = ['profile_id', 'soft_skill'];
}

