	<?php
	function texto($txt)
	{
		return utf8_decode($txt);
	}

	function getMes($num)
	{		
		$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		return $meses[$num - 1];
	}
?>