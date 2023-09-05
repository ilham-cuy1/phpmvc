<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?php echo $data['judul']; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.css">
</head>
<body>
<div class="card border-0 rounded-0" style="background-color: #176B87; height: 50px;">
  <div class="container">
  <div class="card-body text-white">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill text-warning me-1" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg> 0355 796436 
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill text-warning me-1 ms-4" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg> smkduatrenggalek@yahoo.co.id
  </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
    <a class="navbar-brand text-white fs-4 fw-semibold" href="<?php echo BASE_URL; ?>/home">SMK Negeri 2 Trenggalek</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-4 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>/home">Home </a>
        </li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Kompetensi Keahlian</a>
            <div class="dropdown-menu">
              <a href="<?php echo BASE_URL; ?>/kuliner" class="dropdown-item">Kuliner</a>
              <a href="<?php echo BASE_URL; ?>/dpib" class="dropdown-item">Desain Pemodelan dan Informasi Bangunan</a>
              <a href="<?php echo BASE_URL; ?>/rpl" class="dropdown-item">Rekayasa Perangkat Lunak</a>
              <a href="<?php echo BASE_URL; ?>/tptup" class="dropdown-item">Teknik Pemanasan, Tata Udara dan Pendinginan</a>
              <a href="<?php echo BASE_URL; ?>/ak" class="dropdown-item">Akuntansi</a>
              <a href="<?php echo BASE_URL; ?>/tkp" class="dropdown-item">Teknik Konstruksi dan Perumahan</a>
              <a href="<?php echo BASE_URL; ?>/tp" class="dropdown-item">Teknik Pengelasan</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>/guru">Data Guru </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>/siswa">Data Siswa </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>/user/profile">About</a>
        </li>
      </ul>
    </div>
    </div>
</nav>

<div class="card border-0 rounded-0" style="height: 6px; background-color: #176B87;">
  <div class="card-body">
  </div>
</div>