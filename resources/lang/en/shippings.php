<?php

return [
	'titles' => [
        "index" => "Shippings",
        "new" => "New Shipping",
        "edit" => "Edit Shipping",
        "delete" => "Delete Shipping"
    ],
	'fields' => [
        "school_id" => "School_Id",
        "warehouse_id" => "Warehouse_Id",
        "box_quantity" => "Box_Quantity",
        "box_carriage" => "Box_Carriage",
        "carrier" => "Carrier",
        "shipping_price" => "Shipping_Price",
        "departure_date" => "Departure_Date",
        "arrival_date" => "Arrival_Date",
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
        "register_successful" => "The shipping has been successfully registered.",
        "update_successful" => "The shipping has been successfully updated.",
        "activated_successful" => "The shipping has been successfully activated.",
        "deactivated_successful" => "The shipping has been successfully deactivated.",
        "delete_successful" => "The shipping has been successfully deleted.",
        "already_register" => "The shipping had been registered previously.",
        "no_exists" => "The shipping does not exist.",
        "delete_confirmation" => "Are you sure, that you will delete selected shipping?",
        "field_school_id_missing" => "The field school_id is required.",
        "field_school_id_is_integer" => "The field school_id must contain an integer value.",
        "field_warehouse_id_missing" => "The field warehouse_id is required.",
        "field_warehouse_id_is_integer" => "The field warehouse_id must contain an integer value.",
        "field_box_quantity_missing" => "The field box_quantity is required.",
        "field_box_quantity_is_integer" => "The field box_quantity must contain an integer value.",
        "field_box_carriage_is_integer" => "The field box_carriage must contain an integer value.",
        "field_shipping_price_missing" => "The field shipping_price is required.",
        "field_shipping_price_is_decimal" => "The field shipping_price must contain an numeric value.",
        "field_departure_date_missing" => "The field departure_date is required."
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
