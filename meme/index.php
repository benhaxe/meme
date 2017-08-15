<?php


/*

Operation Delete Old Files from meme/images Folder that is One hour old
*/
$image_directory_files = glob("images/*");
foreach ($image_directory_files as $file) {
    # code...
    $last_modified_time  = filemtime($file);
    $current_time = time();
    $time_difference = abs($current_time  - $last_modified_time) / (60 * 60);

    if (is_file($file) && $time_difference > 1 ) {
        unlink($file);
    }
}
// Deleting old files ending



/*

Uploading File starts Here

*/
 $image_set = isset($_FILES['image']);
 $response = array('error' => true, 'image-link' => null );

 $target_dir = "images/";

$ref_address = $_SERVER["HTTP_REFERER"];

 $ref_address;

if ($image_set) {
 #.... Image gotten...  So action
$image_file = $target_dir . time() . basename($_FILES['image']['name']) ;
$image_file_type = pathinfo($image_file, PATHINFO_EXTENSION);
$image_file_size = $_FILES['image']['size'];

// Move upload file to directory
move_uploaded_file($_FILES['image']['tmp_name'], $image_file);

$response = array('error' => false, 'image-link' => $ref_address . "meme/" .  $image_file);
echo json_encode($response);

}

else {
    # code... Error image not uploaded

    # Send error response image
    echo json_encode($response);
}




?>