<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>dely blog</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <!-- <?php echo BASE_URI; ?> -->
  <link href="templates/css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="templates/css/custom.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="templates/js/bootstrap.js"></script>
  <script src="templates/js/ckeditor/ckeditor.js"></script>
  <?php
  //Check if title is set, if not assign it
  if (!isset($title)) {
    $title = SITE_TITLE;
  }
  ?>
</head>

<body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Blogging</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Home</a></li>
          <?php if (!isLoggedIn()) : ?>
            <li><a href="./register.php">Create An Account</a></li>
          <?php else : ?>
            <li><a href="create.php">Create Topic</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="main-col">
          <div class="block">
            <h1 class="pull-left"><?php echo $title; ?></h1>
            <h4 class="pull-right">Harry To Write and Share Us Your Great Post</h4>
            <div class="clearfix"></div>
            <hr>
            <?php displayMessage(); ?>