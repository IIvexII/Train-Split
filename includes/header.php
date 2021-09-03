<?php
  // Including files
  include "includes/functions.php";
  // Including secret credentials from cred.php
  // REMAINDER: This should not be be included in the repository
  include "includes/cred.php";
  $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Train Split</title>
  </head>
<body>
  
<!-- Show Navbar -->
<?php include "navbar.php"; ?>