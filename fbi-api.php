<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){
	if(isset($_GET['id'])){
		$endpoint="https://api.fbi.gov/@wanted-person/".$_GET["id"];
	}else{

	$endpoint='https://api.fbi.gov/wanted/v1/list?';
	


	if(isset($_GET['page'])){
		$endpoint.="page=". $_GET['page'] ."&";
	}


	if(isset($_GET['pageSize'])){
		$endpoint.="pageSize=".$_GET['pageSize']."&";
	}


	if(isset($_GET['sort_on'])){
		$endpoint.="sort_on=".$_GET['sort_on']."&";
	}


	if(isset($_GET['sort_order'])){
		$endpoint.="sort_order=".$_GET['sort_on']."&";
	}


	if(isset($_GET['title'])){
		$endpoint.="title=".$_GET["title"]."&";
	}


	if(isset($_GET['field_office'])){
		$endpoint.="field_office=".$_GET["field_office"]."&";
	}


	if(isset($_GET['person_classification'])){
		$endpoint.="person_classification=".$_GET["person_classification"]."&";
	}


	if(isset($_GET['sex'])){
		$endpoint.="sex=".$_GET['sex']."&";
	}


	if(isset($_GET['eyes'])){
		$endpoint.="eyes=".$_GET['eyes']."&";
	}


	if(isset($_GET['race'])){
		$endpoint.="race=".$_GET['race'];
	}
	
	}

	$res = json_decode(file_get_contents($endpoint));


}else{
	$res= array(
		"error"=>true,
		"status"=>http_response_code(400),
		"statusText"=>"invalid method"
	);

}

echo json_encode($res);
?>
