
<?php get_header(); 
/*
Template Name: Gracias
*/
?>
<?php 


		if(isset($_POST['submit'])){


$destinatario = "miguel@claryla.com,alejandro@claryla.com"; 
$asunto = "smartboards.com.co"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Nuevo dato desde Smartboards Mexico</title> 
</head> 
<body> 
<h1>Smart Boards (Mexico)</h1>
<table>
	<tr>
		<td>
			 <p>Nombre:</p>
		</td>
		<td>
			<p>'.$_POST["nombre"].'</p>
		</td>
	</tr>
	<tr>
		<td>	
 			<p>Email:</p>	
		</td>
		<td>
		<p>'.$_POST["email"].'</p>
		</td>
	</tr>
	<tr>
		<td>
			 <p>telefono:</p>
		</td>
		<td>
			<p>'.$_POST["telefono"].'</p>
		</td>
	</tr>
	<tr>
		<td>
			 <p>mensaje:</p>
		</td>
		<td>			
			<p>'.$_POST["mensaje"].'</p>
		</td>
	</tr>
</table>







</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= 'From: mexico-smartboards@claryla.com' . "\r\n" ;


mail($destinatario,$asunto,$cuerpo,$headers);
} 



?>


		<?php include (TEMPLATEPATH . '/cuerpo-gracias.php'); ?>
		<?php include (TEMPLATEPATH . '/cajas.php'); ?>
		<?php include (TEMPLATEPATH . '/nosotros.php'); ?>
		


<!-- Google Code for Datos Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1006975282;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "pbNpCOirrWQQsvKU4AM";
var google_conversion_value = 100000.00;
var google_conversion_currency = "COP";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1006975282/?value=100000.00&amp;currency_code=COP&amp;label=pbNpCOirrWQQsvKU4AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript> 



<?php get_footer(); ?>
