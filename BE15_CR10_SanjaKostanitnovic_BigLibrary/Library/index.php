<?php
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM media";
$result = mysqli_query($connect, $sql);
$tbody = '';
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "<tr>
            <td>" . $row['title'] . "</td>
            <td>" . $row['type'] . "</td>
            <td><img class='img-thumbnail' src='pictures/" . $row['image'] . "'</td>
            <td>" . $row['short_description'] . "</td>
            <td>" . $row['author_first_name'] . "</td>
            <td>" . $row['author_last_name'] . "</td>
            <td>" . $row['publisher_name'] . "</td>
            <td>" . $row['publisher_address'] . "</td>
            <td>" . $row['publish_date'] . "</td>
            <td>" . $row['ISBN_code'] . "</td>
            <td><a href='update.php?id=" . $row['media_id'] . "'><button class='btn btn-primary'>Edit</button></a>             <a href='delete.php?id=" . $row['media_id'] . "'><button class='btn btn-danger'>Delete</button></a></td>             </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Library</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .manageMedia {
            margin: auto;
            background-color: #E0FFFF;
            border-color: #87CEFA;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }

        td {
            text-align: left;
            vertical-align: middle;
            text-shadow: 10px;
        }

        tr {
            text-align: center;
        }
    </style>
</head>

<body>
<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><strong>Big Library</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Media</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
          </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

    <div class="manageMedia w-75 mt-3">
        <div class='mb-3'>
            <a href="create.php"><button class='btn btn-primary' type="button">Add media</button></a>
        </div>
        <p class='h2'><strong>Media</strong></p>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                                        <th><i>Title</i></th>
                    <th><i>Type</i></th>
                    <th><i>Image</i></th>
                    <th><i>Short Description</i></th>
                    <th><i>Author First Name</i></th>
                    <th><i>Author Last Name</i></th>
                    <th><i>Publisher Name</i></th>
                    <th><i>Publisher Address</i></th>
                    <th><i>Publish Date</i></th>
                    <th><i>ISBN code</i></th>
                    <th><i>Action</i></th>
                </tr>
            </thead>
            <tbody>
                <?= $tbody; ?>
            </tbody>
        </table>
    </div>
</body>

</html>