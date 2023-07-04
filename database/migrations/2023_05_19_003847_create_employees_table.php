<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('employees', function (Blueprint $table) {
//             $table->id();
//             $table->integer('kodebarang');
//             $table->string('namabarang')->nullable();
//             $table->integer('hargabarang');
//             $table->string('deskripsibarang');
//             $table->foreignId('position_id')->constrained();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('employees');
//     }
// };

public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kodebarang')->unique();
            $table->string('namabarang');
            $table->integer('hargabarang');
            $table->text('deskripsibarang');
            $table->foreignId('satuan_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};


