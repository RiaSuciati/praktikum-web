<?php

error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Europe/London');

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PHPExcel Reader Example #01</title>

</head>
<body>

<h1>PHPExcel Reader Example #01</h1>
<h2>Simple File Reader using PHPExcel_IOFactory::load()</h2>
<?php

/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');

/** PHPExcel_IOFactory */
include 'PHPExcel/IOFactory.php';


$inputFileName = './sampleData/tugasrumah.xlsx';
echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' using IOFactory to identify the format<br />';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


echo '<hr />';
mysql_connect('localhost','root','');
mysql_select_db('myweb');

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
require_once './koneksi.php';
foreach($sheetData as $data){
	$sql = "INSERT INTO mahasiswa Values (";
	foreach ($data as $isiData){
		$sql .="'($isiData)',";
	}
	$sql = substr($sql, 0, strlen($sql)-1);
	$sql .=");";
	mysql_query($sql);
}



?>
<body>
</html>