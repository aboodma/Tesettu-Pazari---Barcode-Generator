<?php
session_start();
error_reporting(0);
// /include '../config/baseURl.php';
$password=$_POST['password'];
$user=$_POST['username'];
//$password='pirveli25';
//$user='pirveli';
$url = "http://www.tesetturpazari.com/rest1/auth/login/aboodma";

$fields = array( 'pass' => "540963za");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

//print_r($response);


$arr = json_decode($response, true);

	//	header("location:".$base."index.php?c=users");


    foreach ($arr['message'] as $value) {
            if ($value['type'] == '2') {
                    echo "2";
            }
            if ($value['type'] == '1') {
                    echo "1";
                    foreach ($arr['data'] as $value) {
                    	// $value['token'];

                    		$_SESSION['TOKEN']=$value['token'];
                    		$_SESSION['userId']=$value['userId'];
                    		$_SESSION['username']=$value['username'];
            }

    }
		//header("location:".$base."login.php");

};
?>
