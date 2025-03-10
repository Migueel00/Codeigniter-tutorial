<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Upload files </title>
</head>
<body>
  <h2>Upload files with codeigniter 4</h2>
  <form action="<?php base_url('upload')?>" method="POST" enctype="multipart/form-data" > <!-- to upload files -->

  <p>
    <label for="file">Select a file</label>
    <input type="file" name="file" id="file" accept="image/jpeg, image/png" >
  </p>

  <p>
    <button type="submit">Upload file</button>
  </p>

  </form>
</body>
</html>