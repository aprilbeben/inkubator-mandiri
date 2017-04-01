<?php
require_once("../../config/mysqlminang.php");
$p=new Mysqlminang("db_inkubator","localhost","root","");
$sql="Select * from regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
$data=array();
foreach($p->GetAllRows($sql) as $row)
{
	$data[]=array(
				'title'=>'pendaftaran',
				'start'=>$row->PENDAFTARAN_AWAL,
				'end'=>$row->PENDAFTARAN_AKHIR,
				);
				$data[]=array(
				'title'=>'wawancara',
				'start'=>$row->WAWANCARA_AWAL,
				'end'=>$row->WAWANCARA_AKHIR,
				);
				$data[]=array(
				'title'=>'survey',
				'start'=>$row->SURVEY_AWAL,
				'end'=>$row->SURVEY_AKHIR,
				);
}
	echo json_encode($data);
?>