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
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('value')->nullable();
                $table->boolean('active')->default(true);
                $table->timestamps();
                $table->integer('created_by')->nullable();
                $table->integer('updated_by')->nullable();
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
