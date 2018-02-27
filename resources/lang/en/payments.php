<?php

return [
	'titles' => [
        "index" => "Payments",
        "new" => "New Payment",
        "edit" => "Edit Payment",
        "delete" => "Delete Payment"
    ],
	'fields' => [
        "school_id" => "School_Id",
        "date" => "Date",
        "amount" => "Amount",
        "method" => "Method",
        "reference" => "Reference",
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
        "register_successful" => "The payment has been successfully registered.",
        "update_successful" => "The payment has been successfully updated.",
        "activated_successful" => "The payment has been successfully activated.",
        "deactivated_successful" => "The payment has been successfully deactivated.",
        "delete_successful" => "The payment has been successfully deleted.",
        "already_register" => "The payment had been registered previously.",
        "no_exists" => "The payment does not exist.",
        "delete_confirmation" => "Are you sure, that you will delete selected payment?",
        "field_school_id_missing" => "The field school_id is required.",
        "field_school_id_is_integer" => "The field school_id must contain an integer value.",
        "field_date_missing" => "The field date is required.",
        "field_amount_missing" => "The field amount is required."
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
