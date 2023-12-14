<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    protected $fillable = ['name', 'age_in_years'];

    public function planets()
    {
        return $this->hasMany(Planet::class, 'solar_system_id');
    }
}
?>
