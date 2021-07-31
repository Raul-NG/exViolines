<?php

session_start();
include 'conexion_be.php';

$statusMsg = '';
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$fileName = str_replace(' ', '_', $fileName);
$fileName = $_SESSION['user'] . '_' . $_POST['reto'] . '_' . $fileName;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = mysqli_query($conexion, "INSERT into logros (usuario_id, reto_id, file_name, fecha) VALUES ('$_SESSION[user]', '$_POST[reto]','".$fileName."', NOW())") or die(mysqli_error($conexion));
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("Location: ../misretos.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
                header("Location: ../error.php");
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
            header("Location: ../error.php");
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        header("Location: ../error.php");
    }
}else{
    $statusMsg = 'Please select a file to upload.';
    header("Location: ../error.php");
}
?>