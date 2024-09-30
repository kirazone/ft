

<style type="text/css">

<!--

table {

  border-collapse: collapse;

}



td, th {

  border: 1px solid;

  text-align: left;

  padding: 4px;

}

-->

</style>

<page backtop="15mm" backbottom="15mm" backleft="15mm" backright="15mm" style="font-size: 12pt; font-family: arial" >

       

   

	<table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">

		<tr>

			<th style="width: 50%;text-align:left; border: 0px">

			Fecha: <?php echo date("d/m/Y");?>

			</th>

			<th style="width: 50%;text-align:right; border: 0px;">

			Número de orden: <?php echo $num_orden;?>

			</th>

		</tr>

		

	</table>



    <br>

    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">

		<tr>

			<th style="width: 100%;text-align:center; background-color: #3498db;color: white ">

			Hoja de recepción de producto a reparar

			</th>			

		</tr>



	</table>

	<br>

    

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	<tr>

            <th style="width: 25%; text-align: left;">Nombre del cliente</th>

            <td style="width: 75%"><?php echo $cliente;?></td>

            

            

        </tr>        

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	

        <tr>

            <th style="width: 25%; text-align: left;">Documento de Identidad</th>

            <td style="width: 25%"><?php echo $dni;?></td>

            <th style="width: 25%">Teléfono</th>

            <td style="width: 25%"><?php echo $telefono;?></td>

            

        </tr>

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	<tr>

            <th style="width: 25%; text-align: left;">Correo Electrónico</th>

            <td style="width: 75%"><?php echo $correo;?></td>

        </tr>        

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	

        <tr>

            <th style="width: 25%; text-align: left;">Sucursal</th>

            <td style="width: 25%"><?php echo $sucursal;?></td>

            <th style="width: 25%">Marca</th>

            <td style="width: 25%"><?php echo $marca;?></td>

        </tr>

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	

        <tr>

            <th style="width: 25%; text-align: left;">Modelo</th>

            <td style="width: 25%"><?php echo $modelo;?></td>

            <th style="width: 25%">Número de serie</th>

            <td style="width: 25%"><?php echo $num_serie;?></td>

            

        </tr>

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	<tr>

            <th style="width: 25%; text-align: left;">Descripcion del problema</th>

            <td style="width: 75%"><?php echo $descripcion_problema;?></td>

        </tr>        

    </table>

    <br>

    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">

		<tr>

			<th style="width: 100%;text-align:center; background-color: #3498db;color: white ">

			Tipo de reparación

			</th>			

		</tr>

		

	</table>

	<br>

	<table cellspacing="0" style="width: 100%;  text-align: center; font-size: 8pt;">

    	<?php 

        	if($tipo_reparacion==1){

        		$tipo='<img src="../../img/check.png" height="20">';

        	}else{

        		$tipo='';

        	}

        	if($tipo_reparacion==2){

        		$tipo2='<img src="../../img/check.png" height="20">';

        	}else{

        		$tipo2='';

        	}

        	if($tipo_reparacion==3){

        		$tipo3='<img src="../../img/check.png" height="20">';

        	}else{

        		$tipo3='';

        	}



        ?>

        <tr>

            <th style="width: 20%; text-align: left;">Reparación por garantia de producto</th>

            <td style="width: 10%; text-align: center;"> <?php echo $tipo; ?></td>

            <th style="width: 25%">Reparación a cuenta del cliente<br>(Aplica en el taller servitorial)</th>

            <td style="width: 10%; text-align: center;"><?php echo $tipo2; ?></td>

            <th style="width: 25%; text-align: center;">Servicio reparación XL</th>

            <td style="width: 10%; text-align: center;"><?php echo $tipo3; ?></td>

            

        </tr>

    </table>



    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 10pt;">

    	

        <tr>

            <th style="width: 10%; text-align: left;">Código</th>

            <th style="width: 40%">Caracteristicas</th>            

            <th style="width: 10%"></th>

            <th style="width: 40%">En que parte del producto?</th>

            

        </tr>

        <?php 

        	if($check_1==1){

        		$check1='<img src="../../img/check.png" height="20">';

        	}else{

        		$check1='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">1</th>

            <td style="width: 40%">Fuente de Poder</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check1; ?></td>

            <td style="width: 40%"><?php echo $part_product_1; ?></td>            

        </tr>

        <?php 

        	if($check_2==1){

        		$check2='<img src="../../img/check.png" height="20">';

        	}else{

        		$check2='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">2</th>

            <td style="width: 40%">Marcas(Rayones)</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check2; ?></td>

            <td style="width: 40%"><?php echo $part_product_2; ?></td>            

        </tr>

        <?php 

        	if($check_3==1){

        		$check3='<img src="../../img/check.png" height="20">';

        	}else{

        		$check3='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">3</th>

            <td style="width: 40%">Mantenimiento Preventivo</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check3; ?></td>

            <td style="width: 40%"><?php echo $part_product_3; ?></td>            

        </tr>

        <?php 

        	if($check_4==1){

        		$check4='<img src="../../img/check.png" height="20">';

        	}else{

        		$check4='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">4</th>

            <td style="width: 40%">Mantenimiento Correctivo</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check4; ?></td>

            <td style="width: 40%"><?php echo $part_product_4; ?></td>            

        </tr>

        <?php 

        	if($check_5==1){

        		$check5='<img src="../../img/check.png" height="20">';

        	}else{

        		$check5='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">5</th>

            <td style="width: 40%">Cambio de Disco Duro</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check5; ?></td>

            <td style="width: 40%"><?php echo $part_product_5; ?></td>            

        </tr>

        <?php 

        	if($check_6==1){

        		$check6='<img src="../../img/check.png" height="20">';

        	}else{

        		$check6='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">6</th>

            <td style="width: 40%">Sitema Operativo/ Formateo</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check6; ?></td>

            <td style="width: 40%"><?php echo $part_product_6; ?></td>            

        </tr>

        <?php 

        	if($check_7==1){

        		$check7='<img src="../../img/check.png" height="20">';

        	}else{

        		$check7='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">7</th>

            <td style="width: 40%">Componentes Faltantes</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check7; ?></td>

            <td style="width: 40%"><?php echo $part_product_7; ?></td>            

        </tr>

        <?php 

        	if($check_8==1){

        		$check8='<img src="../../img/check.png" height="20">';

        	}else{

        		$check8='';

        	}

        ?>

        <tr>

            <th style="width: 10%; text-align: left;">8</th>

            <td style="width: 40%">Otros</td>            

            <td style="width: 10%; text-align: center;"><?php echo $check8; ?></td>

            <td style="width: 40%"><?php echo $part_product_8; ?></td>            

        </tr>

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	<tr>

            <th style="width: 25%; text-align: left;">Componentes Faltantes</th>

            <td style="width: 75%"><?php echo $componentes_faltantes;?></td>

        </tr>        

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	<tr>

            <th style="width: 25%; text-align: left;">Descripcion</th>

            <td style="width: 75%"><?php echo $descripcion;?></td>

        </tr>        

    </table>

    <table cellspacing="0" style="width: 100%;  text-align: center; font-size: 11pt;">

    	<tr>

            <th style="width: 25%; text-align: left;">Otras Observaciones</th>

            <td style="width: 75%"><?php echo $otras_observaciones;?></td>

        </tr>        

    </table>



	



</page>

