<?php namespace App\Http\Controllers\Api;

use Crudvel\Customs\Controllers\ApiController;

class RoleController extends ApiController {
    
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
        $this->addActions("permissions");
        $this->addRowActions("permissions");
    }

    public function preAction($method,$parameters){

        if(!$this->currentUser->first()->isRoot())
            $this->model->hidden();

        if($method==="index"){
            $this->model->with(['permissions'=>function($query){
                $query->select('permissions.name');
            }]);
        }
        if($method==="show"){
            $this->model->with(['permissions'=>function($query){
                $query->select('permissions.id','permissions.name');
            }]);
        }
    }

    public function permissions(){
        $this->modelInstance = $this->modelInstance->first()->permissions();
        return $this->index();
    }

    public function store(){
        $this->setStamps();
        if(empty($this->fields["password"]))
            unset($this->fields["password"]);
        return $this->persist(function(){
            $toSync=isset($this->fields["permissions"]) && is_array($this->fields["permissions"])?$this->fields["permissions"]:[];
            return $this->modelInstance->permissions()->sync($toSync);
        })?$this->apiSuccessResponse($this->modelInstance):$this->apiFailResponse();
    }

    public function update($id){
        $this->fields['id'] = $id;
        $this->setStamps();
        if(empty($this->fields["password"]))
            unset($this->fields["password"]);
        return $this->persist(function(){
            $toSync=isset($this->fields["permissions"]) && is_array($this->fields["permissions"])?$this->fields["permissions"]:[];
            return $this->modelInstance->permissions()->sync($toSync);
        })?$this->apiSuccessResponse($this->modelInstance):$this->apiFailResponse();
    }
}