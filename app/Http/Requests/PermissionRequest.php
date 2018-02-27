<?php

namespace App\Http\Requests;

use Crudvel\Customs\Requests\CrudRequest;
class PermissionRequest extends CrudRequest
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
            "name"        => "required|unique:permissions,name",
            "slug"        => "required|unique:permissions,slug",
            "active"      => "boolean",
        ];
    }

    public function putUpdate(){
        $this->rules["name"] .=",".$this->currentActionId;
        $this->rules["slug"] .=",".$this->currentActionId;
    }
}
