<?php

return [
	'titles' => [
        "index" => "Contribuyentes",
        "new" => "Nuevo Contribuyente",
        "edit" => "Editar Contribuyente",
        "delete" => "Eliminar Contribuyente"
    ],
	'fields' => [
        "school_id" => "Institución Educativa",
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
        "register_successful" => "El Contribuyente ha sido registrado correctamente.",
        "update_successful" => "El Contribuyente ha sido editado correctamente.",
        "activated_successful" => "El Contribuyente ha sido activado correctamente.",
        "deactivated_successful" => "El Contribuyente ha sido desactivado correctamente.",
        "delete_successful" => "El Contribuyente ha sido eliminado correctamente.",
        "already_register" => "El Contribuyente ha sido registrado previamente.",
        "no_exists" => "El Contribuyente no existe.",
        "delete_confirmation" => "¿Está seguro que desea eliminar el Contribuyente seleccionado?",
        "field_school_id_missing" => "El campo Institución Educativa es requerido.",
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
