<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Crudvel\Database\Migrations\BaseMigration;

class CreateExListsTable20180227 extends BaseMigration
{
    public function up()
    {
        if(!Schema::hasTable($this->mainTable)){
            Schema::create($this->mainTable, function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->boolean('active')->default(true);
                $table->timestamps();
                $table->integer('created_by')->nullable();
                $table->integer('updated_by')->nullable();
                $table->engine = 'InnoDB';
            });
        }
    }
}
