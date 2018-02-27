<?php

return [
    'titles'                  => [
        "delete"                  => "Eliminar Pago",
        "edit"                    => "Editar Pago",
        "index"                   => "Pagos",
        "new"                     => "Nuevo Pago",
    ],
    'fields'                  => [
        "active"                  => "Activo",
        "amount"                  => "Monto",
        "date"                    => "Fecha",
        "left_days"               => "Dias restantes para facturar",
        "method"                  => "Metodo",
        "reference"               => "Referencia",
        "school_id"               => "Institución Educativa",
        "semaphore"               => "Semaforo de facturación",
        'days_left'               => 'Vigencia facturación',
    ],
    'buttons'                 => [
        "cancel"                  => "Cancelar",
        "no"                      => "No",
        "register"                => "Registrar",
        "update"                  => "Actualizar",
        "yes"                     => "Si",
    ],
    'notifications'           => [
        "activated_successful"           => "El pago fue activado satisfactoriamente.",
        "already_register"               => "El pago fue registrado previamente.",
        "deactivated_successful"         => "El pago fue desactivado satisfactoriamente.",
        "delete_confirmation"            => "¿Esta seguro que desea eliminar el pago seleccionado?",
        "delete_successful"              => "El pago fue eliminado satisfactoriamente.",
        "field_amount_missing"           => "El campo monto es requerido.",
        "field_payment_sat_code_missing" => "El campo clave de pago sat es requerido.",
        "field_date_missing"             => "El campo fecha es requerido.",
        "field_school_id_missing"        => "El campo Institución Educativa es requerida.",
        "no_exists"                      => "El pago no existe.",
        "register_successful"            => "El pago fue registrado satisfactoriamente.",
        "update_successful"              => "El pago fue actualizado satisfactoriamente.",
    ],
    'validations'             => [
        "digits"                  => "El campo acepta solo números.",
        "maxlength"               => "El tamaño máximo del campo es de {0}.",
        "minlength"               => "El tamaño mínimo del campo es de {0}.",
        "required"                => "El campo es requerido.",
    ]
];
