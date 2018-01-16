<html>
	
	<head>
		<title>ciBlog</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<!--
    <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>-->
	</head>

	<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CiBlog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Pages/view'); ?>">Home 
        <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Pages/view'); ?>/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Posts/index'); ?>/posts">Blog</a>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right" >
       <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Posts/create');?>">Create Post</a>
    </ul>
  </div>
</nav>
<div class="container">


