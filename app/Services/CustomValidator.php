<?php namespace App\Services;

use Crudvel\Customs\Validations\CustomValidator AS CrudvelCustomValidator;

use DB;

class CustomValidator extends CrudvelCustomValidator {

    /**
     * Validate that all the elements on the list, correspond with his catalog
     *
     * @author	Beni (beni@intagono.com) 2016-12-05
     *
     * @return  boolean
     */
    function validateListExist($attribute, $value, $parameters)
    {
    	if(!isset($parameters[0]) || !is_array($value) || count($value)===0)
    		return false;
    	
    	$query = DB::table($parameters[0])->where('id','=',$value[0]);
    	foreach($value AS $identifier){
    		$query->orWhere('id','=',$identifier);
    	}

    	return $query->count() === count($value);
    }

    public function validateAtLeastXSemaphoresOfKind($attribute, $value, $parameters){

    	if(!isset($parameters[0]) || count($value)===0)
    		return false;
		$type     = $parameters[0];
		$quantity = 1;
		$count    = \App\Models\Semaphore::actives()->inType($type)->count();
    	if(isset($parameters[1]))
    		$quantity=$parameters[1];

    	if(		isset($parameters[2]) &&
				($oldSemaphore = \App\Models\Semaphore::find($parameters[2])) &&
				(
					$oldSemaphore->status===1 &&
					$oldSemaphore->type===$type &&
					($value!==$type || (isset($parameters[3]) && $parameters[3]==0))
				)
			){
			$count--;
    	}
    	else
			return true;

    	return $count>=$quantity;
    }

    public function validateAtLeastXSemaphoresOfKindByStatus($attribute, $value, $parameters){
    	if(!isset($parameters[0]))
    		return false;

		$type     = $parameters[0];
		$quantity = 1;
		$count    = \App\Models\Semaphore::actives()->inType($type)->count();
    	if(isset($parameters[1]))
    		$quantity=$parameters[1];

    	if(
				($oldSemaphore = \App\Models\Semaphore::find($parameters[2])) &&
				(
					$oldSemaphore->status==1 &&
					$oldSemaphore->type===$type
				)
			)
			$count--;

    	return $count>=$quantity;
    }

    public function validateAtLeastXSemaphoresOfKindToDestroy($attribute, $value, $parameters){
    	if(!isset($parameters[0]))
    		return false;

		$type     = $parameters[0];
		$quantity = 1;
		$count    = \App\Models\Semaphore::actives()->inType($type)->count();
    	if(isset($parameters[1]))
    		$quantity=$parameters[1];

    	if(
				($oldSemaphore = \App\Models\Semaphore::find($parameters[2])) &&
				(
					$oldSemaphore->status==1 &&
					$oldSemaphore->type===$type
				)
			)
			$count--;

    	return $count>=$quantity;
    }

    public function validateColor($attribute, $value, $parameters){
    	return preg_match('/^^#[a-fA-F0-9]{6,6}$/',$value);
    }

    //Replacers
    public function replaceAtLeastXSemaphoresOfKind($message, $attribute, $rule, $parameters){

    	if(!isset($parameters[0]))
    		return $message;

		$type     = $parameters[0];
		$quantity = 1;
    	if(isset($parameters[1]))
    		$quantity=$parameters[1];
    	return 'Debe haber almenos '.$quantity.' semaforo de tipo: "'.$type.'" activo';
    }

    public function replaceAtLeastXSemaphoresOfKindByStatus($message, $attribute, $rule, $parameters){
		return $this->replaceAtLeastXSemaphoresOfKind($message, $attribute, $rule, $parameters);
    }

    public function replaceAtLeastXSemaphoresOfKindToDestroy($message, $attribute, $rule, $parameters){
		return $this->replaceAtLeastXSemaphoresOfKind($message, $attribute, $rule, $parameters);
    }
}