<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSolarSystemIdToPlanetsTable extends Migration
{
    public function up()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->unsignedBigInteger('solar_system_id'); // Foreign Key
            $table->foreign('solar_system_id')->references('id')->on('solar_systems');
        });
    }

    public function down()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropForeign(['solar_system_id']);
            $table->dropColumn('solar_system_id');
        });
    }
}
?>
