<?php

use App\Models\Client;
use App\Models\Lawyer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_cases', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('court')->nullable();
            $table->string('date')->nullable();
            $table->string('variation')->nullable();
            $table->boolean('status')->default(0);
            // 0 represents open
            // 1 represents closed
            // 2 represents stalled / abandoned
            $table->text('judges')->nullable();
            $table->text('catchwords')->nullable();
            $table->text('headnotes')->nullable();
            $table->string('stages')->nullable();
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Lawyer::class, 'lawyer_id')->nullable();
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
        Schema::dropIfExists('list_cases');
    }
}