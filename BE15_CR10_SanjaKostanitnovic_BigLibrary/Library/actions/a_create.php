<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    $title = $_POST['title'];
    $type = $_POST['type'];
    $image = file_upload($_FILES['image']);  
    $short_description = $_POST['short_description'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];
    $publish_date = $_POST['publish_date'];
    $ISBN_code = $_POST['ISBN_code'];
    $uploadError = '';
   
    $sql = "INSERT INTO media (title, `type`, `image`, short_description, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, ISBN_code ) VALUES ('$title','$type', '$image->fileName', '$short_description','$author_first_name','$author_last_name','$publisher_name','$publisher_address','$publish_date','$ISBN_code')";

    if (mysqli_query($connect, $sql)) {
        $class = "success";
        $message = "The entry below was successfully created";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>