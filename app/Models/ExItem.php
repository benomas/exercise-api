<?php namespace App\Models;

use Crudvel\Customs\Models\BaseModel;

class ExItem extends BaseModel {

    protected $fillable = [
		"active",
		"ex_list_id",
		"value",
    ];

//Relationships

    public function exList()
    {
        return $this->belongsTo("App\Models\ExList");
    }

//End Relationships

//Scopes

    public function scopeOfExList($query,$exListId){
        $query->where($this->getTable().'.ex_list_id',$exListId);
    }

// End Scopes

//Others



//End Others

}
