<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable = ['name', 'description', 'size_in_km', 'solar_system_id'];

    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class, 'solar_system_id');
    }
}
?>