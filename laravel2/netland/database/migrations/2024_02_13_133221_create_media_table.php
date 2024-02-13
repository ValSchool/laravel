<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Media extends Model
{
    protected $fillable = ['title', 'rating', 'length_in_minutes', 'released_at', 'country_of_origin', 'youtube_trailer_id', 'summary', 'spoken_in_language', 'is_series'];

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'actor_media');
    }

    public function up()
{
    Schema::create('actor_media', function (Blueprint $table) {
        $table->id();
        $table->foreignId('actor_id')->constrained();
        $table->foreignId('media_id')->constrained();
        $table->timestamps();
    });
}

}

