<?php

use App\Models\ListCase;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListCaseFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_case_files', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ListCase::class);
            $table->smallInteger('who')->default(1);
            //0 - represents client
            // 1 - represents lawyer
            $table->string('file_url');
            $table->string('file_name');
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('list_case_files');
    }
}