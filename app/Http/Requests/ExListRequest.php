<?php

namespace App\Http\Requests;

use Crudvel\Customs\Requests\CrudRequest;
class ExListRequest extends CrudRequest
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
            "active"      => "boolean",
        ];
    }

    public function putUpdate(){
        $this->rules["name"] .=",".$this->currentActionId;
        $this->rules["slug"] .=",".$this->currentActionId;
    }
}