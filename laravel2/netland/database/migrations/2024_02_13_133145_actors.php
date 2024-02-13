<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['first_name', 'last_name', 'age', 'sex', 'country', 'has_won_awards'];

    public function media()
    {
        return $this->belongsToMany(Media::class, 'actor_media');
    }
}

