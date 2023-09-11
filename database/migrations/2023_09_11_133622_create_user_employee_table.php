<?php

use App\User;
use App\Electrician;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrician_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor( User::class ); 
            $table->foreignIdFor( Electrician::class  );
            $table->integer('count' );
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
        Schema::dropIfExists('electrician_user');
    }
}
