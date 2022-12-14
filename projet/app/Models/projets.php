<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projets extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }

    public function experience()
    {
        return $this->hasMany(experiences::class);
    }
}
