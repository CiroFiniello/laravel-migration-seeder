
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione_di_arrivo');
            $table->string('Stazione_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->time('Orario_di_partenza');
            $table->string('Codice_Treno');
            $table->integer('Numero_Carrozze');
            $table->time('orario');
            $table->boolean('Cancellato');
            $table->date('data');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
?>



