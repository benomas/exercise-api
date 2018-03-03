<?php namespace Crudvel\Customs\Controllers;
/**
 *
 *
 * @author Benomas benomas@gmail.com
 * @date   2017-05-08
 * modificable ApiController
 */
use Crudvel\Controllers\ApiController AS defaultApiController;
class ApiController extends defaultApiController
{
    //public function __construct($request,$model){
    public function __construct(...$propertyRewriter){
        parent::__construct(...$propertyRewriter);
        //lag simulator
        //sleep(1);
    }

    public function activate($id){
        $this->fields["active"]=1;
        $this->fields['id'] = $id;
        $this->setStamps();
        return $this->persist()?$this->apiSuccessResponse():$this->apiFailResponse();
    }

    public function deactivate($id){
        $this->fields["active"] =0;
        $this->fields['id'] = $id;
        $this->setStamps();
        return $this->persist()?$this->apiSuccessResponse():$this->apiFailResponse();
    } 
    
    protected function setStamps(){}
}