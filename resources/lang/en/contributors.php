<?php

return [
	'titles' => [
        "index" => "Contributors",
        "new" => "New Contributors",
        "edit" => "Edit Contributors",
        "delete" => "Delete Contributors"
    ],
	'fields' => [
        "school_id" => "School_Id",
        "rfc" => "Rfc",
        "name" => "Name",
        "street" => "Street",
        "exterior" => "Exterior",
        "interior" => "Interior",
        "colony" => "Colony",
        "municipality" => "Municipality",
        "state" => "State",
        "country" => "Country",
        "zipcode" => "Zipcode",
        "status" => "Status"
    ],
	'buttons' => [
        "register" => "Register",
        "update" => "Update",
        "cancel" => "Cancel",
        "yes" => "Yes",
        "no" => "No"
    ],
	'notifications' => [
        "register_successful" => "The contributors has been successfully registered.",
        "update_successful" => "The contributors has been successfully updated.",
        "activated_successful" => "The contributors has been successfully activated.",
        "deactivated_successful" => "The contributors has been successfully deactivated.",
        "delete_successful" => "The contributors has been successfully deleted.",
        "already_register" => "The contributors had been registered previously.",
        "no_exists" => "The contributors does not exist.",
        "delete_confirmation" => "Are you sure, that you will delete selected contributors?",
        "field_school_id_missing" => "The field school_id is required.",
        "field_rfc_missing" => "The field rfc is required.",
        "field_name_missing" => "The field name is required.",
        "field_state_missing" => "The field state is required.",
        "field_country_missing" => "The field country is required."
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
