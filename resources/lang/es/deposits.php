<?php

return [
	'titles' => [
        "index" => "Depositos a Personal",
        "new" => "Nuevo Depósito",
        "edit" => "Editar Depósito",
        "delete" => "Eliminar Depósito"
    ],
	'fields' => [
        "id" => "No.",
        "promoter_id" => "Promotor",
        "date" => "Fecha",
        "amount" => "Monto",
        "status" => "Status"
    ],
	'buttons' => [
        "register" => "Registrar",
        "update" => "Actualizar",
        "cancel" => "Cancelar",
        "yes" => "Sí",
        "no" => "No"
    ],
	'notifications' => [
        "register_successful" => "El depósito a personal ha sido realizado correctamente.",
        "update_successful" => "El depósito a personal ha sido actualizado correctamente.",
        "activated_successful" => "El depósito a personal ha sido activado correctamente.",
        "deactivated_successful" => "El depósito a personal ha sido desactivado correctamente.",
        "delete_successful" => "El depósito a personal ha sido eliminado correctamente.",
        "already_register" => "El depósito a personal ya había sido registrado.",
        "no_exists" => "El depósito a personal no existe.",
        "delete_confirmation" => "¿Estás seguro, que deseas eliminar el depósito seleccionado?",
        "field_promoter_id_missing" => "El promotor es un campo obligatorio.",
        "field_date_missing" => "La fecha es un campo obligatorio.",
        "field_amount_missing" => "El monto es un campo obligatorio.",
        "field_amount_is_decimal" => "El monto debe ser un valor numérico."
    ],
	'validations' => [
        "required" => "El campo es obligatorio.",
        "email" => "El campo es un email incorrecto.",
        "digits" => "El campo solo acepta dígitos.",
        "number" => "El campo solo acepta valores numéricos.",
        "minlength" => "El valor máximo es de {0}.",
        "maxlength" => "El valor mínimo es de {0}."
    ]
];
