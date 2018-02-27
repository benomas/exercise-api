<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/
$proyectSlug = str_slug(config("app.name"));

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command($proyectSlug.':up', function () {
 
	$commands = [
		"composer update",
		"composer install",
		"composer update",
		"php artisan cache:clear",
		"php artisan config:cache",
		"composer dump-autoload",
		"php artisan migrate",
		"php artisan vendor:publish --provider='Benomas\Crudvel\CrudvelServiceProvider'",
		"php artisan install:crudvel",
		"php artisan migrate",
		"php artisan db:seed",
		"php artisan passport:install",
		"php artisan make:root-user"
	];

	if(\Schema::hasTable("oauth_clients")){

		$this->info("Ya se habia inicializado el proyecto, se remueven comandos que generarian conflictos");
		unset($commands[7]);
		unset($commands[8]);
		unset($commands[11]);
		unset($commands[12]);
	}

	foreach ($commands as $command) {
		if($command==="php db:seed")
			$this->info("A continuacion se ejecutan seeders, este proceso puede tardar varios minutos");
		
		$shellEcho  = shell_exec($command);
		$this->info($shellEcho);
		$this->info($command." procesado ");
	}

	if(config("app.env")!=="production")
		\DB::table("oauth_clients")->WHERE("id",2)->UPDATE(["secret"=>"devdevdevdevdevdevdevdevdevdevdevdevdevd"]);

})->describe('Inicialize proyect from zero');

Artisan::command($proyectSlug.':lite-up', function () {
 
	$commands = [
		"php artisan migrate",
		"php artisan vendor:publish --provider='Benomas\Crudvel\CrudvelServiceProvider'",
		"php artisan install:crudvel",
		"php artisan migrate",
		"php artisan db:seed",
		"php artisan passport:install",
		"php artisan make:root-user"
	];

	if(\Schema::hasTable("oauth_clients")){
		$this->info("Ya se habia inicializado el proyecto, se remueven comandos que generarian conflictos");
		unset($commands[1]);
		unset($commands[2]);
		unset($commands[5]);
		unset($commands[6]);
	}

	foreach ($commands as $command) {
		if($command==="php db:seed")
			$this->info("A continuacion se ejecutan seeders, este proceso puede tardar varios minutos");
		
		$shellEcho  = shell_exec($command);
		$this->info($shellEcho);
		$this->info($command." procesado ");
	}
	
	if(config("app.env")!=="production")
		\DB::table("oauth_clients")->WHERE("id",2)->UPDATE(["secret"=>"devdevdevdevdevdevdevdevdevdevdevdevdevd"]);

})->describe('Inicialize proyect from zero');

Artisan::command($proyectSlug.':down {destroyMigrations?}', function ($destroyMigrations=null) {
 
	$commands = [
		"php artisan migrate:rollback"
	];

	foreach ($commands as $command) {
		$shellEcho  = shell_exec($command);
		$this->info($shellEcho);
		$this->info($command." procesado ");
	}

	if(!empty($destroyMigrations) && $destroyMigrations){
		foreach (glob(database_path()."/migrations/*alter_users_table*.php") as $filename) {
		    unlink($filename);
		}
		foreach (glob(database_path()."/migrations/*create_roles_table*.php") as $filename) {
		    unlink($filename);
		}
		foreach (glob(database_path()."/migrations/*create_role_user_table*.php") as $filename) {
		    unlink($filename);
		}
		foreach (glob(database_path()."/migrations/*create_permissions_table*.php") as $filename) {
		    unlink($filename);
		}
		foreach (glob(database_path()."/migrations/*create_permission_role_table*.php") as $filename) {
		    unlink($filename);
		}
	}

})->describe('Back to empty proyect');


Artisan::command('test:seed', function () {

	$commands = [
		'php artisan db:seed --class="Database\Seeds\Test\UsersTableSeeder"',
		'php artisan db:seed --class="Database\Seeds\Test\CatCompanyTypesTableSeeder"',
		'php artisan db:seed --class="Database\Seeds\Test\CatRiskTypesTableSeeder"',
		'php artisan db:seed --class="Database\Seeds\Test\CatIndicatorCategoriesTableSeeder"',
		'php artisan db:seed --class="Database\Seeds\Test\CatMeasuramentUnitsTableSeeder"',
		'php artisan db:seed --class="Database\Seeds\Test\CompaniesTableSeeder"',
	];
	foreach ($commands as $command) {
		$shellEcho  = shell_exec($command);
		$this->info($shellEcho);
		$this->info($command." procesado ");
	}

})->describe('Run test seeders');
