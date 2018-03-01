<?php namespace App\Http\Controllers\Api;

use Crudvel\Customs\Controllers\ApiController;

class ExItemController extends ApiController {

    protected $selectables = [
    	"id",
        "value",
    	"active",
    ];
    protected $filterables = [
    	"id",
        "value",
    	"active",
    ];
    protected $orderables = [
    	"id",
        "value",
    	"active",
    ];

    public function __construct(){
        parent::__construct();
    }
}