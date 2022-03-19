<?php
require_once 'actions/db_connect.php';

if ($_GET['media_id']) {
    $media_id = $_GET['media_id'];
    $sql = "SELECT * FROM media WHERE media_id = {$media_id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $type = $data['type'];
        $image = $data['image'];
        $short_description = $data['short_description'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publish_date = $data['publish_date'];
        $ISBN_code = $data['ISBN_code'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="title" placeholder="Media Name" value="<?php echo $title ?>" /></td>
                </tr>
                                              <tr>
                    <th>Type</th>
                    <td><input class="form-control" type="text" name="type" placeholder="Media Type" value="<?php echo $type ?>" /></td>
                </tr> 
                <tr>
                    <th>Image</th>
                    <td><input class="form-control" type="file" name="image" /></td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td><input class="form-control" type="text" name="short_description" placeholder="Short Description" value="<?php echo $short_description ?>" /></td>
                </tr> <tr>
                    <th>Author First Name</th>
                    <td><input class="form-control" type="text" name="author_first_name" placeholder="Author First Name" value="<?php echo $author_first_name ?>" /></td>
                </tr>
                <th>Author Last Name</th>
                    <td><input class="form-control" type="text" name="author-last_name" placeholder="Author Last Name" value="<?php echo $author_last_name ?>" /></td>
                </tr> <tr>
                    <th>Publisher Address</th>
                    <td><input class="form-control" type="text" name="publisher_address" placeholder="Publisher Address" value="<?php echo $publisher_address ?>" /></td>
                </tr> <tr>
                    <th>Publish Date</th>
                    <td><input class="form-control" type="date" name="publish_date" placeholder="Publish Date" value="<?php echo $publish_date ?>" /></td>
                </tr>
                <tr>
                    <th>ISBN Code</th>
                    <td><input class="form-control" type="number" name="ISBN_code" step="any" placeholder="ISBN code" value="<?php echo $ISBN_code ?>" /></td>
                </tr>
                     <tr>
                    <input type="hidden" name="media_id" value="<?php echo $data['media_id'] ?>" />
                    <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>