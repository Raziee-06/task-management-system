<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full-Stack Workshop - Exploring Bootstrap 5</title>
  <!-- Bootstrap CSS -->
  <link href="/assets/css/bootstrap.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url(); ?>home">Task Management</a>
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php if (!session()->get("isLoggedIn")): ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>login">Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>dashboard">dashboard</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>dashboard">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>newtask">Add Task</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>logout">Logout</a>
            </li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>