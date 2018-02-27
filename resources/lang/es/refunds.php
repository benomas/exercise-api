<?php

return [
	'titles' => [
        "index" => "Devoluciones",
        "new" => "Nueva Devolución",
        "edit" => "Editar Devolución",
        "delete" => "Eliminar Devolución"
    ],
	'fields' => [
        "school_id" => "Institución Educativa",
        "date" => "Fecha",
        "reason" => "Razón",
        "subtotal" => "Subtotal",
        "total" => "Total"
    ],
	'buttons' => [
        "register" => "Registrar",
        "update" => "Actualizar",
        "cancel" => "Cancelar",
        "yes" => "Sí",
        "no" => "No"
    ],
	'notifications' => [
        "register_successful" => "La Devolución fue registrada correctamente.",
        "update_successful" => "La Devolución fue actualizada correctamente.",
        "activated_successful" => "La Devolución fue enviada correctamente.",
        "deactivated_successful" => "La Devolución fue cancelado correctamente.",
        "delete_successful" => "La Devolución fue eliminado correctamente.",
        "already_register" => "La Devolución fue registrado anteriormente.",
        "no_exists" => "La Devolución no existe.",
        "delete_confirmation" => "¿Esta seguro, de eliminar la Devolución seleccionada?",
        "field_school_id_missing" => "El campo Institución Educativa es requerido.",
        "field_warehouse_id_missing" => "El campo Inventario es requerido.",
        "field_box_quantity_missing" => "El campo Cantidad de Cajas es requerido.",
        "field_box_quantity_is_integer" => "El campo Cantidad de Cajas debe ser un número entero.",
        "field_shipping_price_missing" => "El campo de Precío de Envío es requerido.",
        "field_shipping_price_is_decimal" => "El campo de Precío de Envío debe ser un número.",
        "field_departure_date_missing" => "El campo de Fecha de Envío es requerido."
    ],
	'validations' => [
        "required" => "El campo es requerido.",
        "digits" => "El campo acepta solo números.",
        "minlength" => "El tamaño mínimo del campo es de {0}.",
        "maxlength" => "El tamaño máximo del campo es de {0}."
    ]
];
