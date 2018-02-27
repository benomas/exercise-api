<?php

return [
	'titles' => [
        "index" => "Deposits",
        "new" => "New Deposit",
        "edit" => "Edit Deposit",
        "delete" => "Delete Deposit"
    ],
	'fields' => [
        "promoter_id" => "Promoter_Id",
        "date" => "Date",
        "amount" => "Amount",
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
        "register_successful" => "The deposit has been successfully registered.",
        "update_successful" => "The deposit has been successfully updated.",
        "activated_successful" => "The deposit has been successfully activated.",
        "deactivated_successful" => "The deposit has been successfully deactivated.",
        "delete_successful" => "The deposit has been successfully deleted.",
        "already_register" => "The deposit had been registered previously.",
        "no_exists" => "The deposit does not exist.",
        "delete_confirmation" => "Are you sure, that you will delete selected deposit?",
        "field_promoter_id_missing" => "The field promoter_id is required.",
        "field_promoter_id_is_integer" => "The field promoter_id must contain an integer value.",
        "field_date_missing" => "The field date is required.",
        "field_amount_missing" => "The field amount is required.",
        "field_amount_is_decimal" => "The field amount must contain an numeric value."
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
