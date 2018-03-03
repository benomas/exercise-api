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
            "title"  => "required",
            "active" => "boolean",
        ];
    }
}