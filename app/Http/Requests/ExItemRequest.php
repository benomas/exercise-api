<?php

namespace App\Http\Requests;

use Crudvel\Customs\Requests\CrudRequest;
class ExItemRequest extends CrudRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function defaultRules()
    {
        $this->rules=[
            "description" => "required",
            "name"        => "required|unique:ex_lists,name",
            "slug"        => "required|unique:ex_lists,slug",
            "list_id"     => "required|key_exist:ex_lists",
            "active"      => "boolean",
        ];
    }

    public function putUpdate(){
        $this->rules["name"] .=",".$this->currentActionId;
        $this->rules["slug"] .=",".$this->currentActionId;
    }
}