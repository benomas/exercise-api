<?php namespace App\Models;

use Crudvel\Customs\Models\BaseModel;

class ExList extends BaseModel {

    protected $fillable = [
		"active",
		"list_id",
		"title",
    ];

//Relationships

    public function exItems(){
        return $this->hasMany("\App\Models\ExItem");
    }

//End Relationships

//Scopes



// End Scopes

//Others



//End Others

}
