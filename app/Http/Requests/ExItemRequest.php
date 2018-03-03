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
            //validation disabled for simplify list
            //"value"      => "required",
            "ex_list_id" => "required|key_exist:ex_lists",
            "active"     => "boolean",
        ];
    }

}