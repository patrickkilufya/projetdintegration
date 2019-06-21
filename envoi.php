<?php
session_start();

?>
<!doctype html>
<html>
<head>
    <title>projet d'integration</title>
    <meta charset="UTF-8">
    <meta http-equiv="Accept-Charset">
    <link href="css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body>
<html>
<body>
<div class="container">
<div class="col-lg-6">
    <form enctype="multipart/form-data" action="fileupload.php" method="post" class="">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000" class="form-control"/>
        Transfère le fichier <input type="file" name="monfichier"class="form-control" />
        <input type="submit" class="btn btn-primary"/>
        <input type="reset" class="btn btn-warning"/>
    </form>
</div>
</div>
<div></div>

</body>
</html>