<?php

return [
    'titles' => [
        "index" => "Empresas",
        "new" => "Nueva Empresa",
        "edit" => "Editar Empresa",
        "delete" => "Eliminar Empresa"
    ],
    'fields' => [
        "rfc" => "RFC",
        "name" => "Nombre",
        "street" => "Calle",
        "exterior" => "Exterior",
        "interior" => "Interior",
        "colony" => "Colonia",
        "municipality" => "Municipio",
        "state" => "Estado",
        "country" => "País",
        "zipcode" => "Código Postal",
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
        "register_successful" => "La Empresa ha sido registrada correctamente.",
        "update_successful" => "La Empresa ha sido editada correctamente.",
        "activated_successful" => "La Empresa ha sido activada correctamente.",
        "deactivated_successful" => "La Empresa ha sido desactivada correctamente.",
        "delete_successful" => "La Empresa ha sido eliminada correctamente.",
        "already_register" => "La Empresa ha sido registrada previamente.",
        "no_exists" => "La Empresa no existe.",
        "delete_confirmation" => "¿Está seguro que desea eliminar la Empresa seleccionada?",
        "field_rfc_missing" => "El campo RFC es requerido.",
        "field_name_missing" => "El campo Nombre es requerido.",
        "field_state_missing" => "El campo Estado es requerido.",
        "field_country_missing" => "El campo País es requerido."
    ],
    'validations' => [
        "required" => "El campo es requerido.",
        "email" => "El campo Email es incorrecto.",
        "digits" => "El campo solo acepta dígitos.",
        "number" => "El campo solo acepta números.",
        "minlength" => "El tamaño mínimo del campo es de {0}.",
        "maxlength" => "El tamaño máximo del campo es de {0}."
    ]
];
