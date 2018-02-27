<?php

return [
    'title'        => 'Productos',
    'kits_title'   => 'Paquetes',
    'new'          => 'Nuevo Producto',
    'new_kit'      => 'Nuevo Paquete',
    'yes'          => 'SI',
    'no'           => 'NO',
    'id'           => 'Id',
    'name'         => 'Nombre',
    'level'        => 'Nivel',
    'purpose'      => 'Uso',
    'price'        => 'Precio',
    'iva'          => 'IVA',
    'stock'        => 'Existencia',
    'warehouses'   => 'Concesionarios',
    'cancel'       => 'Cancelar',
    'register'     => 'Registrar',
    'update'       => 'Modificar',
    'active'       => 'Activo',
    'import'       => 'Importar',
    'import_title' => 'Importar Productos e Inventario',
    'import_file'  => 'Archivo a Importar (Excel)',
    'no_import'    => 'El archivo no pudo ser importado',
    'commissions'  => [
            'private'=>'Comisiones para institución privada',
            'public'=>'Comisiones para institución Publica',
        ],
    'warehouses' => [
        'delete_confirmation'             => '¿Estás seguro que deseas eliminar el Concesionario seleccionado?',
        'delete_title'                    => 'Eliminar Concesionario',
        'new'                             => 'Nuevo Concesionario',
        'title'                           => 'Concesionarios',
        'update_title'                    => 'Modificar Concesionario',
        'warehouse_delete_confirmation'   => 'El Concesionario ha sido eliminado correctamente.',
        'warehouse_no_exists'             => 'El Concesionario no existe en la base de datos.',
        'warehouse_register_confirmation' => 'El Concesionario ha sido registrado correctamente.',
        'warehouse_update_confirmation'   => 'El Concesionario ha sido actualizado correctamente.',
    ],
    'products' => [
        'delete_confirmation'           => '¿Estás seguro que deseas eliminar el Producto seleccionado?',
        'delete_title'                  => 'Eliminar Producto',
        'export_confirmation'           => 'Los Productos han sido exportados correctamente',
        'import_confirmation'           => 'Los Productos han sido importados correctamente',
        'product_delete_confirmation'   => 'El Producto ha sido eliminado correctamente.',
        'product_no_exists'             => 'El Producto no existe en la base de datos.',
        'product_register_confirmation' => 'El Producto ha sido registrado correctamente.',
        'product_update_confirmation'   => 'El Producto ha sido actualizado correctamente.',
        'register_error'                => 'No se pudo registrar el Producto',
        'update_title'                  => 'Modificar Producto',
    ],
    'kits' => [
        'delete_confirmation'   => '¿Estás seguro que deseas eliminar el Paquete seleccionado?',
        'delete_notification'   => 'El Paquete ha sido eliminado correctamente.',
        'delete_title'          => 'Eliminar Paquete',
        'export_confirmation'   => 'Los Paquetes han sido exportados correctamente',
        'import_confirmation'   => 'Los Paquetes han sido importados correctamente',
        'no_exists'             => 'El Paquete no existe en la base de datos.',
        'register_confirmation' => 'El Paquete ha sido registrado correctamente.',
        'update_confirmation'   => 'El Paquete ha sido actualizado correctamente.',
        'update_title'          => 'Modificar Paquete',
    ],
    'validations' => [
        'minlength' => 'Ingresa al menos {0} caracteres',
        'required'  => 'Este campo es obligatorio',
    ],
   

];