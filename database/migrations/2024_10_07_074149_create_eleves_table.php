<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateElevesTable extends Migration
    {
        /**
            * Run the migrations.
            *
            * @return void
            */
        public function up()
        {
            Schema::create('eleves', function (Blueprint $table) {
                $table->id();
                $table->string('nom');
                $table->string('prenom');
                $table->date('date_Naissance');
                $table->string('num_etudiant');
                $table->string('email');
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        /**
            * Reverse the migrations.
            *
            * @return void
            */
        public function down()
        {
            Schema::dropIfExists('eleves');
        }
    }

