<?php 
require_once __DIR__.'/../OperateDB/DbMgrInterface.php';
@extract($_GET);
switch ($op){
	case 1:
		$output = DB_Read(
			array(
				'Table' => 'locationlist',
				'Fields'=> '*',
				'clause'=> 'cityId = '.$param
			),
			'ASSOC',''
		);
		break;
	case 2:
		$output = DB_Read(
			array(
				'Table' => 'schoollist',
				'Fields'=> '*',
				'clause'=> 'cityId = '.$param[0].' AND locationID = '.$param[1]
			),
			'ASSOC',''
		);
		break;
	case 3:
		$output = DB_Read(
			array(
				'Table' => 'eventList',
				'Fields'=> '*',
				'clause'=> 'cityId = '.$param
			),
			'ASSOC',''
		);
		break;
}
echo json_encode($output);
?>