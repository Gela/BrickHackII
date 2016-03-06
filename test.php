<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

function uploadFile() {

    if (strlen($_POST['uploadFile']) > 0) {
        $target_path = "uploads/";
        $content = $_POST['uploadFile'];
        list($type, $data) = explode(';', $content);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);


        $faceId = "img.jpg";
        $target_path = $target_path . $faceId;
        if (file_put_contents($target_path, $data) !== false) {
        	echo "http://{$_SERVER['HTTP_HOST']}/{$target_path}";
        }

	}
}


uploadFile();