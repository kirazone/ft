<?php

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

if($action == 'ajax'){

	/* Connect To Database*/

	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos

	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

	

	//agregamos

	

	if (isset($_POST['orden'])){

		

		$num_orden=mysqli_real_escape_string($con,$_POST['orden']);

		$fecha = str_replace('/', '-', $_POST['fecha']);

		$fecha_add = date('Y-m-d', strtotime($fecha));

		$cliente=mysqli_real_escape_string($con,$_POST['cliente']);

		$dni=mysqli_real_escape_string($con,$_POST['dni']);

		$telefono=mysqli_real_escape_string($con,$_POST['telefono']);

		$email=mysqli_real_escape_string($con,$_POST['email']);

		$sucursal=mysqli_real_escape_string($con,$_POST['sucursal']);

		$marca=mysqli_real_escape_string($con,$_POST['marca']);

		$modelo=mysqli_real_escape_string($con,$_POST['modelo']);

		$num_serie=mysqli_real_escape_string($con,$_POST['serie']);

		$taller=mysqli_real_escape_string($con,$_POST['taller']);

		$descProblema=mysqli_real_escape_string($con,$_POST['descProblema']);

		$tipo_reparacion=mysqli_real_escape_string($con,$_POST['tipo_reparacion']);

		



		$check_1=mysqli_real_escape_string($con,$_POST['check_1']);

		$check_2=mysqli_real_escape_string($con,$_POST['check_2']);

		$check_3=mysqli_real_escape_string($con,$_POST['check_3']);

		$check_4=mysqli_real_escape_string($con,$_POST['check_4']);

		$check_5=mysqli_real_escape_string($con,$_POST['check_5']);

		$check_6=mysqli_real_escape_string($con,$_POST['check_6']);

		$check_7=mysqli_real_escape_string($con,$_POST['check_7']);

		$check_8=mysqli_real_escape_string($con,$_POST['check_8']);



		$part_product_1=mysqli_real_escape_string($con,$_POST['part_product_1']);

		$part_product_2=mysqli_real_escape_string($con,$_POST['part_product_2']);

		$part_product_3=mysqli_real_escape_string($con,$_POST['part_product_3']);

		$part_product_4=mysqli_real_escape_string($con,$_POST['part_product_4']);

		$part_product_5=mysqli_real_escape_string($con,$_POST['part_product_5']);

		$part_product_6=mysqli_real_escape_string($con,$_POST['part_product_6']);

		$part_product_7=mysqli_real_escape_string($con,$_POST['part_product_7']);

		$part_product_8=mysqli_real_escape_string($con,$_POST['part_product_8']);



		$componentes_faltantes=mysqli_real_escape_string($con,$_POST['componentes_faltantes']);

		$descripcion=mysqli_real_escape_string($con,$_POST['descripcion']);

		$otras_observaciones=mysqli_real_escape_string($con,$_POST['otras_observaciones']);











		$sql="INSERT INTO `orden_reparacion`

							(`id`,

							 `num_orden`,

							  `fecha`,

							   `cliente`,

							    `dni`,

							    `telefono`,

							 	`correo`,

							 	`sucursal`,

							 	`marca`,

							 	`modelo`,

							 	`num_serie`,

							 	`taller`,

							 	`descripcion_problema`,

							 	`tipo_reparacion`,							 	

							 	`check_1`,

							 	`check_2`,

							 	`check_3`,

							 	`check_4`,

							 	`check_5`,

							 	`check_6`,

							 	`check_7`,

							 	`check_8`,

							 	`part_product_1`,

							 	`part_product_2`,

							 	`part_product_3`,

							 	`part_product_4`,

							 	`part_product_5`,

							 	`part_product_6`,

							 	`part_product_7`,

							 	`part_product_8`,

							 	`componentes_faltantes`,

							 	`descripcion`,

							 	`otras_observaciones`



							 	) VALUES

							 	 (NULL,

							 	  '$num_orden',

							 	   '$fecha_add',

							 	   '$cliente',

							 	    '$dni',

							 	     '$telefono',

							 	     '$email',

							 	     '$sucursal',

							 	     '$marca',

							 	     '$modelo',

							 	     '$num_serie',

							 	     '$taller',

							 	     '$descProblema',

							 	     '$tipo_reparacion',	 	     							 	     

							 	     '$check_1',

							 	     '$check_2',

							 	     '$check_3',

							 	     '$check_4',

							 	     '$check_5',

							 	     '$check_6',

							 	     '$check_7',

							 	     '$check_8',

							 	     '$part_product_1',

							 		 '$part_product_2',

								 	 '$part_product_3',

								 	 '$part_product_4',

								 	 '$part_product_5',

								 	 '$part_product_6',

								 	 '$part_product_7',

								 	 '$part_product_8',

								 	 '$componentes_faltantes',

								 	 '$descripcion',

								 	 '$otras_observaciones'

							 	 );";

		$insert=mysqli_query($con,$sql);

	}





}