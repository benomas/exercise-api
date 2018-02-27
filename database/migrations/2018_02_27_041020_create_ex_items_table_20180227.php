<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Crudvel\Database\Migrations\BaseMigration;

class CreateExItemsTable20180227 extends BaseMigration
{
    public function up()
    {
        if(!Schema::hasTable($this->mainTable)){
            Schema::create($this->mainTable, function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug');
                $table->string('name');
                $table->string('description');
                $table->boolean('active')->default(true);
                $table->timestamps();
                $table->integer('created_by')->nullable();
                $table->integer('updated_by')->nullable();
                $table->engine = 'InnoDB';
                $table->unique('slug');
                $table->integer('ex_list_id')->unsigned();
                $table->foreign('ex_list_id')
                    ->references('id')
                    ->on('ex_lists')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            });
        }
    }
}
