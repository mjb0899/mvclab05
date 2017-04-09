<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $fileExt= explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','mp3');
    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<100000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination='uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location:index.php");
            }else{
                echo "File too big";
            }
        }else{
            echo "Something went wrong with your file";
        }
    }else{
        echo $fileActualExt."+";
        echo $fileExt;
        echo "you canot upload files of this type";
    }
}