<?php
/*
*custom helper, made by Beni at 2016-11-22, the principal porpouse is to bind DFP html from array.
*/

if(!function_exists("requestToModel")){
	/**
	 * load data only if exist, this function is necesary, because when request->field recibe an empty
	 * data, and it is assigned to a numeric field, php change the value to 0. other ways if you need to save
	 * a field not present in the request has a null or has empty string, you can then use the anonnymouse function
	 *
	 * @author	Beni (benomas@gmail.com) 2016-12-22
	 *
	 * @param	array	instances	the collection of the instances to check and assign from the request
	 * @param	moderlObject	modelObject, this params is necesary for update purposes
	 *
	 * @return  object or array
	 */
	function requestToModel($instances){
		$data=[];
		foreach($instances AS $intance){
			if(is_callable($intance)){
				$intance($data);
			}
			else{
				$segments = explode('.',$intance);
				$field = $segments[count($segments)-1];
				if(\Illuminate\Support\Facades\Input::has($intance)){
					$data[$field]=Input::get($intance);
				}
			}
		}

		return $data;
	}
}

if(!function_exists("toModelWithRequest")){
	/**
	 * load data only if exist, this function is necesary, because when request->field recibe an empty
	 * data, and it is assigned to a numeric field, php change the value to 0. other ways if you need to save
	 * a field not present in the request has a null or has empty string, you can then use the anonnymouse function
	 *
	 * @author	Beni (benomas@gmail.com) 2016-12-22
	 *
	 * @param	array	instances	the collection of the instances to check and assign from the request
	 * @param	moderlObject	modelObject, this params is necesary for update purposes
	 *
	 * @return  object or array
	 */
	function toModelWithRequest($instances,$request){
		$data=[];
		foreach($instances AS $intance){
			if(is_callable($intance)){
				$intance($data);
			}
			else{
				$segments = explode('.',$intance);
				$field = $segments[count($segments)-1];
				if($request->has($intance)){
					$data[$field]=$request->get($intance);
				}
			}
		}

		return $data;
	}
}

if(!function_exists("factorial")){

	/**
	 * calculate factorial of n
	 *
	 * @author	Beni (benomas@gmail.com) 2017-01-18
	 *
	 * @param	iny	n	number for calculate the factorial
	 *
	 * @return  int factorial
	 */
	function factorial($n)
	{
		if($n===1)
			return 1;
		return $n * factorial($n-1);
	}
}


if(!function_exists("dateFormatSwitch")){

	/**
	 * switch between date format
	 *
	 * @author	Beni (benomas@gmail.com) 2017-01-18
	 *
	 * @param	string	date	date to convert
	 * @param	string	originFormant	format origin of the date
	 * @param	string	destineFormat	format destine of the date
	 *
	 * @return  string converted date
	 */
	function dateFormatSwitch($date,$originFormant='Y/m/d', $destineFormat='Y-m-d'){
		if( !isset($date) || !$date)
			return null;
		return \Carbon\Carbon::createFromFormat($originFormant,$date)->format($destineFormat);
	}
}

/**
 * check current role
 *
 * @param array    roles  list of target roles to compare
 * 
 * @author Benomas benomas@gmail.com
 * @date   2017-05-24
 * @return boolean
 */ 
if(!function_exists("inRoles")){

	function inRoles(...$roles){
		return !($user = \Cartalyst\Sentinel\Laravel\Facades\Sentinel::getUser())?
			0:
			$user->roles()->whereIn("roles.slug",$roles)->count();
	}
}

if(!function_exists("customLog")){
	function customLog(...$params){
		$params = json_encode($params);
		$backtrace = debug_backtrace();
		\Illuminate\Support\Facades\Log::info("Log from ".$backtrace[0]['file']." - ".$backtrace[1]['function']." in the line: ".$backtrace[0]['line']." with message: ".$params);
	}
}

if(!function_exists("ffDebugg")){
	function ffDebugg(...$params){
		dd($params);
	}
}

//alias of ffDebugg for fast call
if(!function_exists("audit")){
	function audit(...$params){
		dd($params);
	}
}

//alias of ffDebugg for fast call
if(!function_exists("capitalizeWithAccents")){
	function capitalizeWithAccents($originalString){

		if(!$originalString)
			return null;

		return str_replace(
			"á","Á",
			str_replace(
				"é","É",
				str_replace(
					"í","Í",
					str_replace(
						"ó","Ó",
						str_replace(
							"ú","Ú",
							str_replace(
								"ñ","Ñ",
								strtoupper($originalString)
							)
						)
					)
				)
			)
		);

	}
}

if(!function_exists("renameValidationKey")){
	function renameValidationKey(&$rules, $oldKey,$newKey){

		if(is_array($rules) && isset($rules[$oldKey]) && !isset($rules[$newKey])){
			$rules[$newKey] =  $rules[$oldKey];
			unset($rules[$oldKey]);
		}
	}
}

if(!function_exists("reloadFormValue")){
	function reloadFormValue($inputName,$model=null,$columnName=null,$callBack=null){

		if(\Input::old($inputName)!==null)
			return \Input::old($inputName);

		if($model){
			if($columnName && isset($model->$columnName))
				return $model->$columnName;

			if($inputName && isset($model->$inputName))
				return $model->$inputName;
		}

		if($callBack &&  is_callable($callBack) && ($data = $callBack()))
			return $data;
		return '';
	}
}

if(!function_exists("customNonEmptyArray")){
	/**
	 * Verifica si el parametro mandado es diferente de null, es un array, y tiene almenos un elemento
	 *
	 * @param array   testArray  la variable a probar
	 *
	 * @author Benomas benomas@gmail.com
	 * @date   2017-05-08
	 * @return boolean
	 */
	function customNonEmptyArray($testArray){
		return $testArray && is_array($testArray) && count($testArray);
	}
}

if(!function_exists("optionalColumn")){
	function optionalColumn($context,$column){
		return !($colConfiguration = config('project.optional_columns'))
		|| !isset($colConfiguration[$context])
		|| !isset($colConfiguration[$context][$column])
		|| $colConfiguration[$context][$column];
	}
}

if(!function_exists("countOptionalColumns")){
	function countOptionalColumns($context,...$columns){
		$total = 0;
		foreach ($columns as $value) {
			if(optionalColumn($context,$value))
				$total++;
		}
		return $total;
	}
}

if(!function_exists("concatToArray")){
	/**
	 * Concatena un prefijo a cada elemento del array
	 *
	 * @param string   prefix  string con el valor a concatenar
	 *
	 * @author Benomas benomas@gmail.com
	 * @date   2017-05-08
	 * @return array
	 */
	function concatToArray($prefix=null,$baseArray=null){

		if(!customNonEmptyArray($baseArray))
			return $baseArray;

		foreach ($baseArray as $key=>$column) {

		}
	}
}

if(!function_exists("versionedAsset")){
	/**
	 * Genera la ruta para un asset, agregando su fecha de creacion, lo que permite controlar la forma como el navegador maneja el cache
	 *
	 * @param string   file  string con el valor a concatenar
	 *
	 * @author Benomas benomas@gmail.com
	 * @date   2017-05-08
	 * @return array
	 */

	function versionedAsset($file){
		return asset($file)."?creation=".filemtime("../public/".$file);
	}
}

if(!function_exists("trueCount")){
	/**
	 * Cuenta los valores true al evaluar un array de expresiones
	 *
	 * @param string   expresions  array con expresiones logicas
	 *
	 * @author Benomas benomas@gmail.com
	 * @date   2017-05-08
	 * @return array
	 */

	function trueCount(...$expresions){
		$trues=0;
		foreach ($expresions as $expresion) {
			if($expresion)
				$trues++;
		}
		return $trues;
	}
}


if(!function_exists("defaultRound")){

	function defaultRound($value,$decimals=2){
		return number_format(round($value, $decimals),$decimals,".","");
	}
}

if(!function_exists("validateGetActionResource")){
	function validateGetActionResource($action,$only=[],$excludes=[]){
		return ( empty($only["get"]) || !count($only["get"]) ||  in_array($action,$only["get"])) && 
			(empty($excludes["get"]) || !in_array($action,$excludes["get"]));
	}
}

if(!function_exists("validatePostActionResource")){
	function validatePostActionResource($action,$only=[],$excludes=[]){
		return ( empty($only["post"]) || !count($only["post"]) ||  in_array($action,$only["post"])) && 
			(empty($excludes["post"]) || !in_array($action,$excludes["post"]));
	}
}

if(!function_exists("cimeResource")){
	function cimeResource($resource,$controller=null,$conditionals=[]){
		$rowNames = str_slug(($resource),"_");
		if(!$controller)
			$controller=studly_case($rowNames)."Controller";
        if(!count($conditionals)){
	        Route::get($resource, $controller."@index");
	        Route::get($resource."/create", $controller."@create");
	        Route::get($resource."/export", $controller."@export");
	        Route::get($resource."/import", $controller."@import");
	        Route::get($resource."/{id}/active", $controller."@active");
	        Route::get($resource."/{id}/deactive", $controller."@deactive");
	        Route::get($resource."/{id}/edit", $controller."@edit");
	        Route::post($resource."/create", $controller."@create");
	        Route::post($resource."/delete", $controller."@destroy");
	        Route::post($resource."/export", $controller."@exporting");
	        Route::post($resource."/import", $controller."@importing");
	        Route::post($resource."/store", $controller."@store");
	        Route::post($resource."/update", $controller."@update");
        }
        else{
			$only     = empty($conditionals["only"])?[]:$conditionals["only"];
			$excludes = empty($conditionals["excludes"])?[]:$conditionals["excludes"];
	        if(validateGetActionResource("active",$only,$excludes)) Route::get($resource."/{id}/active", $controller."@active");
	        if(validateGetActionResource("create",$only,$excludes)) Route::get($resource."/create", $controller."@create");
	        if(validateGetActionResource("deactive",$only,$excludes)) Route::get($resource."/{id}/deactive", $controller."@deactive");
	        if(validateGetActionResource("edit",$only,$excludes)) Route::get($resource."/{id}/edit", $controller."@edit");
	        if(validateGetActionResource("export",$only,$excludes)) Route::get($resource."/export", $controller."@export");
	        if(validateGetActionResource("import",$only,$excludes)) Route::get($resource."/import", $controller."@import");
	        if(validateGetActionResource("index",$only,$excludes)) Route::get($resource, $controller."@index");

	        if(validatePostActionResource("create",$only,$excludes)) Route::post($resource."/create", $controller."@create");
	        if(validatePostActionResource("destroy",$only,$excludes)) Route::post($resource."/delete", $controller."@destroy");
	        if(validatePostActionResource("exporting",$only,$excludes)) Route::post($resource."/export", $controller."@exporting");
	        if(validatePostActionResource("importing",$only,$excludes)) Route::post($resource."/import", $controller."@importing");
	        if(validatePostActionResource("store",$only,$excludes)) Route::post($resource."/store", $controller."@store");
	        if(validatePostActionResource("update",$only,$excludes)) Route::post($resource."/update", $controller."@update");
        }
	}
}

if(!function_exists("cimeResources")){
	function cimeResources($resources){
		foreach ($resources as $resource) {
			cimeResource($resource);
		}
	}
}

if(!function_exists("unstandardizedRoutes")){
	function unstandardizedRoutes(){
	    Route::get('test_model/{school_id}', "InvoicesController@test_model");

	    Route::get('testing', function() {
	        return (App\Libraries\Mails::newRefund(414));
	    });

	    Route::get('/customers/delete', function(){
	        \App\Models\User::select(["users.id", "users.email"])
	            ->join("role_users", "role_users.user_id", "=", "users.id")
	            ->join("roles", "roles.id", "=", "role_users.role_id")
	            ->where("roles.slug","customer")
	            ->delete();
	    });

	    Route::get('/promoter/delete', function(){
	        \App\Models\User::select(["users.id", "users.email"])
	            ->join("role_users", "role_users.user_id", "=", "users.id")
	            ->join("roles", "roles.id", "=", "role_users.role_id")
	            ->where("roles.slug","promoter")
	            ->delete();

	        \App\Models\User::select(["users.id", "users.email"])
	            ->join("role_users", "role_users.user_id", "=", "users.id")
	            ->join("roles", "roles.id", "=", "role_users.role_id")
	            ->where("roles.slug","trainer")
	            ->delete();
	    });

	    Route::get('/schools/delete', function(){
	        \App\Models\School::where("id",">",0)->delete();
	    });

	    Route::get('/users/import', function(){
	        $fp = fopen(public_path()."/promotores.txt", "r");
	        while(!feof($fp)) {
	            $linea = fgets($fp);
	            $linea = explode(",", $linea);

	            $id = trim($linea[0]);

	            if(!is_numeric($id)){
	                continue;
	            }

	            $nombre = strtoupper(trim($linea[1]));
	            $capacitador = strtoupper(trim($linea[2]));
	            $email = strtolower(trim($linea[3]));
	            $password = strtolower(trim($linea[4]));
	            $direccion = strtolower(trim($linea[5]));
	            $colonia = strtoupper(trim($linea[6]));
	            $ciudad = strtoupper(trim($linea[7]));
	            $estado = strtoupper(trim($linea[8]));
	            $cpostal = strtoupper(trim($linea[9]));

	            $tel1 = str_replace(")","", str_replace("(","", str_replace(" ","", str_replace("-","",strtoupper(trim($linea[10]))))));
	            $tel2 = str_replace(")","", str_replace("(","", str_replace(" ","", str_replace("-","",strtoupper(trim($linea[11]))))));
	            $tel3 = str_replace(")","", str_replace("(","", str_replace(" ","", str_replace("-","",strtoupper(trim($linea[12]))))));
	            $tel4 = str_replace(")","", str_replace("(","", str_replace(" ","", str_replace("-","",strtoupper(trim($linea[13]))))));

	            $cie = strtoupper(trim($linea[14]));
	            $referencia = strtoupper(trim($linea[15]));
	            $observaciones = strtoupper(trim($linea[16]));

	            echo $observaciones . "<br />";
	        }
	        fclose($fp);
	    });

	    Route::get('/ajax/getSchools', function(){
	        $schools = \App\Models\School::whereRaw("employee_id = ".Input::get("promoter"))->get();

	        return $schools;
	    });

	    Route::get('/ajax/emailAvailability/{email}', function($email){
	        $user = App\Models\User::where('email', $email)->count();

	        if($user)
	            return response()->json(array('status' => 'error'));
	        else
	            return response()->json(array('status' => 'success'));
	    });

	    Route::get("/payment/{id}/invoices/unpaid", "InvoicesController@unpaid");

	    Route::get('/ajax/getOrders', function(){
	        $orders = \App\Models\Order::select(array("orders.id", "schools.name"))->join("schools", "schools.id", "=", "orders.school_id")->whereRaw("orders.status = 'ACCEPTED' AND orders.employee_id = ".Input::get("promoter"))->get();

	        return $orders;
	    });
	}
}