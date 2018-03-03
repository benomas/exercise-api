<?php namespace App\Http\Controllers\Api;

use Crudvel\Customs\Controllers\ApiController;

class ExListController extends ApiController {
    
    public $rowGender     = "F";

    protected $selectables = [
    	"id",
        "title",
    	"active",
    ];
    protected $filterables = [
    	"id",
        "title",
    	"active",
    ];
    protected $orderables = [
    	"id",
        "title",
    	"active",
    ];

    public function __construct(){
        parent::__construct();
    }
}