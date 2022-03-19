<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>PHP Library | Add Media</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
            background-color: #FFF0F5;
            border-color: #FFB6C1;
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

    <fieldset>
        <legend class='h2'><strong>Add Media</strong></legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th><i>Title</i></th>
                    <td><input class='form-control' type="text" name="title" placeholder="Media Title" /></td>
                </tr>
                <tr>
                    <th><i>Type</i></th>
                    <td><input class='form-control' type="text" name="type" placeholder="Media Type" /></td>
                </tr>
                                <tr>
                    <th><i>Image</i></th>
                    <td><input class='form-control' type="file" name="image" /></td>
                </tr>
                <tr>
                    <th><i>Short Description</i></th>
                    <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" /></td>
                </tr>
                <tr>
                    <th><i>Author First Name</i></i></th>
                    <td><input class='form-control' type="text" name="author_first_name" placeholder="Author First Name" /></td>
                </tr>
                <tr>
                    <th><i>Author Last Name</i></th>
                    <td><input class='form-control' type="text" name="author_last_name" placeholder="Author Last Name" /></td>
                </tr>
                <tr>
                    <th><i>Publisher Name</i></th>
                    <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" /></td>
                </tr>
                <tr>
                    <th><i>Publisher Address</i></th>
                    <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" /></td>
                </tr>
                <tr>
                    <th><i>Publish Date</i></th>
                    <td><input class='form-control' type="date" name="publish_date" placeholder="Publish Date" /></td>
                </tr>
                <tr>
                    <th><i>ISBN Code</i></th>
                    <td><input class='form-control' type="number" name="ISBN_code" placeholder="ISBN Code" step="any" /></td>
                </tr>


                <tr>
                    <td><button class="btn btn-info" type="submit">Insert Media</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>