<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relación con el usuario que registró la propiedad
            $table->string('titulo'); // Título de la propiedad
            $table->text('descripcion')->nullable(); // Descripción de la propiedad
            $table->string('direccion'); // Dirección
            $table->decimal('precio', 15, 2); // Precio de la vivienda
            $table->integer('cuartos'); // Número de habitaciones
            $table->integer('baños'); // Número de baños
            $table->integer('area'); // Área en metros cuadrados
            $table->enum('estado', ['disponible', 'vendido', 'pendiente'])->default('disponible'); // Estado de la propiedad
            $table->enum('tipo', ['casa', 'apartamento', 'finca']); // Tipo de la propiedad
            $table->enum('amueblado', ['si', 'no']); // Tipo de la propiedad
            $table->enum('garaje', ['si', 'no']); // Tipo de la propiedad
            $table->timestamps();

            // Relaciones
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
