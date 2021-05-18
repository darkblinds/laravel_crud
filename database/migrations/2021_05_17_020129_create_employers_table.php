<?php use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**      * Run the migrations.      *      * @return void */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('endereco');
            $table->string('senha');
            $table->timestamps();
        });
    }

    /**      * Reverse the migrations.      *      * @return void */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
