<?php
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    /*
    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }


    if($file_size > 2097152){
        $errors[]='File size must be less than 2 MB';
    }
    */

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"images/".$file_name);
        /*
        list($width, $height) = getimagesize("images/" . $file_name);
        $thumb = imagecreatetruecolor(100, 100);
        $source = imagecreatefromjpeg("images/" . $file_name);
        imagecopyresized($thumb, $source, 0, 0, 0, 0, 100, 100, $width, $height);
        copy("images/" . $file_name, "thumbnails/" . $file_name);
        */
        echo "Success";
    }else{
        print_r($errors);
    }
    if(isset($_FILES['image'])){
        echo "<li>Sent file: ".$_FILES['image']['name']."";
        echo "<li>File size: ".$_FILES['image']['size']."";
        echo "<li>File type: ".$_FILES['image']['type']."";
    }
    header('Location: index.php');
}