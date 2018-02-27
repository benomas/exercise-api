<?php

return [
	'titles' => [
        "index" => "Envíos",
        "new" => "Nuevo Envío",
        "edit" => "Editar Envío",
        "delete" => "Eliminar Envío"
    ],
	'fields' => [
        "school_id" => "Institución Educativa",
        "warehouse_id" => "Inventario",
        "box_quantity" => "Cajas",
        "box_carriage" => "Caja Porte",
        "carrier" => "Paquetería",
        "shipping_price" => "Costo de Envío",
        "departure_date" => "Fecha de Envío",
        "arrival_date" => "Fecha de Llegada",
        "active" => "Activo"
    ],
	'buttons' => [
        "register" => "Registrar",
        "update" => "Actualizar",
        "cancel" => "Cancelar",
        "yes" => "Sí",
        "no" => "No"
    ],
	'notifications' => [
        "register_successful" => "El Envío fue registrado correctamente.",
        "update_successful" => "El Envío fue actualizado correctamente.",
        "activated_successful" => "El Envío fue enviado correctamente.",
        "deactivated_successful" => "El Envío fue cancelado correctamente.",
        "delete_successful" => "El Envío fue eliminado correctamente.",
        "already_register" => "El Envío fue registrado anteriormente.",
        "no_exists" => "El Envío no existe.",
        "delete_confirmation" => "¿Esta seguro, de eliminar el Envío seleccionado?",
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
