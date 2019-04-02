<?php

include('header.php');
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Flowers </title>
  <meta name="description" content="Flowers">
  <meta name="author" content="SitePoint">
</head>

<body>
  <div>
    <center>
      <h1>Identify!</h1>
      Select a image of a flower to upload.
      <br></br>
      <form method="post" enctype="multipart/form-data">
        <input type="file" name="files[]"/>
        <input class="button" type="submit" value="Upload Image" name="submit" />
      </form>
    </center>
  </div>
  
</body>
</html>
