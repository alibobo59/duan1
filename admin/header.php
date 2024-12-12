<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <!-- Bootstrap CSS Offline -->
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container my-4">
    <!-- Header -->
     
    <header class="mb-4 p-3 bg-primary text-white text-center rounded">
      <h1 class="m-0">Admin Dashboard<?php if (!isset($_SESSION['user'])) {
    echo "Session user data is not set.";
    // Optionally, redirect or handle unauthorized access here
}?></h1>
      

    </header>
    <!-- Navigation -->
    <nav class="mb-4">
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item fw-semibold fw-bold "><a class="nav-link active" href="index.php">Trang chủ</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?act=adddm">Danh mục</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?act=addsp">Hàng hóa</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?act=dskh">Khách hàng</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?act=dsbl">Bình luận</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?act=donhang">Đơn hàng</a></li>
      </ul>
    </nav>