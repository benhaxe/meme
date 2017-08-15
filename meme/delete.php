<?php


$error = false;

if (isset($_POST["image"])) {
$filename =  $_POST["image"];

// Trying to delete image

try {
  
  unlink('images/' . $filename);
}

//catch exception
catch(Exception $e) {
  $response = array('status' => 'failed');
  echo json_encode($response);
  $error = true;
}

if (!$error) {
    $response = array('status' => 'success');

    echo json_encode($response);
}

}

else {
    echo " No image sent";
}

?>