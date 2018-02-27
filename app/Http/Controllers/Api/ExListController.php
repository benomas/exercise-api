<?php namespace App\Http\Controllers\Api;

use Crudvel\Customs\Controllers\ApiController;

class ExListController extends ApiController {
    
    public $rowGender     = "F";

    protected $selectables = [
    	"id",
        "name",
    	"slug",
    	"description",
    	"active",
    ];
    protected $filterables = [
    	"id",
        "name",
    	"slug",
    	"description",
    	"active",
    ];
    protected $orderables = [
    	"id",
        "name",
    	"slug",
    	"description",
    	"active",
    ];

    public function __construct(){
        parent::__construct();
    }
}