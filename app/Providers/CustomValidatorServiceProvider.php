<?php namespace App\Providers;

use App\Services\CustomValidator;
use Illuminate\Support\ServiceProvider;
use Validator;

class CustomValidatorServiceProvider extends ServiceProvider{

    public function boot()
    {
        Validator::resolver(function($translator, $data, $rules, $messages, $attributes)
        {
            return new CustomValidator($translator, $data, $rules, $messages, $attributes);
        });
    }

    public function register()
    {
    }

}