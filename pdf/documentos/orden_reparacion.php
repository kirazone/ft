<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: www.obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	
	/* Connect To Database*/
	include("../../config/db.php");
	include("../../config/conexion.php");
	$num_orden=$_GET['num_orden'];
	$sql=mysqli_query($con,"select * from orden_reparacion where num_orden='".$num_orden."'");
	$count=mysqli_num_rows($sql);
	$rw_orden=mysqli_fetch_array($sql);	
	$fecha= date('d/m/Y', strtotime($rw_orden['fecha']));
	$cliente =$rw_orden['cliente'];
	$dni=$rw_orden['dni'];
	$telefono=$rw_orden['telefono'];
	$correo=$rw_orden['correo'];
	$sucursal=$rw_orden['sucursal'];
	$marca=$rw_orden['marca'];
	$modelo=$rw_orden['modelo'];
	$num_serie=$rw_orden['num_serie'];
	$taller=$rw_orden['taller'];
	$descripcion_problema=$rw_orden['descripcion_problema'];
	$tipo_reparacion=$rw_orden['tipo_reparacion'];	
	$check_1=$rw_orden['check_1'];
	$check_2=$rw_orden['check_2'];
	$check_3=$rw_orden['check_3'];
	$check_4=$rw_orden['check_4'];
	$check_5=$rw_orden['check_5'];
	$check_6=$rw_orden['check_6'];
	$check_7=$rw_orden['check_7'];
	$check_8=$rw_orden['check_8'];
	$part_product_1=$rw_orden['part_product_1'];
	$part_product_2=$rw_orden['part_product_2'];
	$part_product_3=$rw_orden['part_product_3'];
	$part_product_4=$rw_orden['part_product_4'];
	$part_product_5=$rw_orden['part_product_5'];
	$part_product_6=$rw_orden['part_product_6'];
	$part_product_7=$rw_orden['part_product_7'];
	$part_product_8=$rw_orden['part_product_8'];
	$componentes_faltantes=$rw_orden['componentes_faltantes'];
	$descripcion=$rw_orden['descripcion'];
	$otras_observaciones=$rw_orden['otras_observaciones'];
	$check='';
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');	
     ob_start();
     include(dirname('__FILE__').'/res/orden_reparacion_html.php');
    $content = ob_get_clean();

    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', array(0, 0, 0, 0));
        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $content = ob_get_clean();
        // send the PDF
        $html2pdf->Output('orden_reparacion.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
