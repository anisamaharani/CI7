<?php

require_once 'Classes/PHPExcel.php';

//create excel objek
$excel = new PHPExcel();

//insert some data tp PHPExcel object
$excel->setActiveSheetIndex(0)
	->setCellValue('A1', 'hello');
