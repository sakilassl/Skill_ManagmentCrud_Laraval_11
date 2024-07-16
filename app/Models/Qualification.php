<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = ['profile_id', 'qualification_name', 'institution', 'date_obtained'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
