<?php

return [
	'titles' => [
        "index" => "Companies",
        "new" => "New Company",
        "edit" => "Edit Company",
        "delete" => "Delete Company"
    ],
	'fields' => [
        "name" => "Name",
        "active" => "Active"
    ],
	'buttons' => [
        "register" => "Register",
        "update" => "Update",
        "cancel" => "Cancel",
        "yes" => "Yes",
        "no" => "No"
    ],
	'notifications' => [
        "register_successful" => "The company has been successfully registered.",
        "update_successful" => "The company has been successfully updated.",
        "activated_successful" => "The company has been successfully activated.",
        "deactivated_successful" => "The company has been successfully deactivated.",
        "delete_successful" => "The company has been successfully deleted.",
        "already_register" => "The company had been registered previously.",
        "no_exists" => "The company does not exist.",
        "delete_confirmation" => "Are you sure, that you will delete selected company?",
        "field_name_missing" => "The field name is required.",
        "field_active_missing" => "The field active is required."
    ],
	'validations' => [
        "required" => "This field is required.",
        "email" => "This field is an invalid email.",
        "digits" => "This field only accepts digits.",
        "number" => "This field only accepts numeric values.",
        "minlength" => "the minimum length of the field is {0}.",
        "maxlength" => "the maximum length of the field is {0}."
    ]
];
