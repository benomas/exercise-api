<?php

namespace App\Http\Requests;

use Crudvel\Customs\Requests\CrudRequest;
class UserRequest extends CrudRequest
{
    public $customBaseName = "users";

    public function defaultRules()
    {
        $this->rules=[
            "active"   => "boolean",
            "email"    => "required_without:username|email|unique:users,username|unique:users,email",
            "roles"    => "array|list_exist:roles,id",
            "username" => "required_without:email|unique:users,email|unique:users,username",
            "active"   => "boolean",
        ];
    }

    public function postStore(){

    }

    public function putUpdate(){
        $this->rules["email"]    = "required_without:username|email|unique:users,username,".$this->currentActionId."|unique:users,email,".$this->currentActionId;
        $this->rules["username"] = "required_without:email|unique:users,email,".$this->currentActionId."|unique:users,username,".$this->currentActionId;
    }
}