<?php

require_once("dbconnect.php");

if (isset($_POST["submit"])) {

	//$file = $_FILES["food-image"];
	$file_path = "Assets/";

	$original_file_name = $_FILES["food-image"]["name"];
	$file_temp_location = $_FILES["food-image"]["tmp_name"];

	//print_r($file);

	if (move_uploaded_file($file_temp_location, $file_path.$original_file_name)){

		$sql = "UPDATE food_details SET Food_name = '$Food_name', Image_path = '$Image_path', Price = '$Price' WHERE Id = '$Id'";

		if (setData($sql)){
			header("location:view_food.php");
		}
	}
	
}

?>