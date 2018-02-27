<?php namespace App\Http\Controllers\Api;

use Crudvel\Customs\Controllers\ApiController;

class UserController extends ApiController {
    
    protected $selectables = [
    	"id",
        "username",
    	"first_name",
    	"last_name",
    	"email",
    	"active",
    ];
    protected $filterables = [
    	"id",
        "username",
    	"first_name",
    	"last_name",
    	"email",
    	"active",
    ];
    protected $orderables = [
    	"id",
        "username",
    	"first_name",
    	"last_name",
    	"email",
    	"active",
    ];
    public function __construct(){
        parent::__construct();
        $this->addActions("roles");
        $this->addRowActions("roles");
    }

    public function preAction($method,$parameters){

        if(!$this->currentUser->first()->isRoot())
            $this->model->hidden();

        if($method==="index"){
            $this->model->with(['roles'=>function($query){
                $query->select('roles.name');
            }]);
        }
        if($method==="show"){
            $this->model->with(['roles'=>function($query){
                $query->select('roles.id','roles.name');
            }]);
        }
    }

    public function roles(){
        $this->modelInstance = $this->modelInstance->first()->roles();
        return $this->index();
    }

    public function store(){
        $this->setStamps();
        if(empty($this->fields["password"]))
            unset($this->fields["password"]);
        return $this->persist(function(){
            $toSync=isset($this->fields["roles"]) && is_array($this->fields["roles"])?$this->fields["roles"]:[];
            return $this->modelInstance->roles()->sync($toSync);
        })?$this->apiSuccessResponse($this->modelInstance):$this->apiFailResponse();
    }

    public function update($id){
        $this->fields['id'] = $id;
        $this->setStamps();
        if(empty($this->fields["password"]))
            unset($this->fields["password"]);
        return $this->persist(function(){
            $toSync=isset($this->fields["roles"]) && is_array($this->fields["roles"])?$this->fields["roles"]:[];
            return $this->modelInstance->roles()->sync($toSync);
        })?$this->apiSuccessResponse($this->modelInstance):$this->apiFailResponse();
    }  
}