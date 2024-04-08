<?php
// database/migrations/2024_03_05_create_series_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
Schema::create('series', function (Blueprint $table) {
$table->id();
$table->string('titulo');
$table->text('descripcion');
$table->foreignId('categoria_id')->constrained();
$table->string('imagen')->nullable();
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('series');
}
};
