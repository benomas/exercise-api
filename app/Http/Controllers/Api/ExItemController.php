<?php namespace App\Http\Controllers\Api;

use Crudvel\Customs\Controllers\ApiController;

class ExItemController extends ApiController {

    protected $selectables = [
    	"id",
        "value",
    	"active",
    	"ex_list_id",
    ];
    protected $filterables = [
    	"id",
        "value",
    	"active",
    	"ex_list_id",
    ];
    protected $orderables = [
    	"id",
        "value",
    	"active",
    	"ex_list_id",
    ];

    public function __construct(){
        parent::__construct();
    }

    public function callAction($method,$parameters=[]){
    	if(!empty($parameters["ex_list"]))
    		$this->model->ofExList($parameters["ex_list"]);
        return parent::callAction($method,$parameters);
    }
}