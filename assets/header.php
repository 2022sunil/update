<?php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance management system</title>
  
    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media_queries.css">
    <link rel="stylesheet" href="./assets/css/animation.css">
  
    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
      rel="stylesheet">
</head>
<body>

     <!--
    - main container
  -->

  <div class="container">

    <!--
      - #HEADER
    -->


    <header>
      <nav class="navbar">

        <div class="navbar-brand">
          <img src="side logo.png" alt="Loan logo">
        </div>

        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#loan">loan</a>
          </li>
          <li class="nav-item">
            <a href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a href="#contact">Contact Us</a>
          </li>

        </ul>

        <button class="btn btn-primary">
          <p class="btn-text">Get Loan</p>
          <span class="square"></span>
        </button>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </nav>

    </header>





    <main>

      <!--
        - #HOME SECTION
      -->

      <section class="home" id="home">

        <div class="deco-shape shape-1">
          <img src="./assets/images/shape-1.png" alt="art shape" width="70">
        </div>
        <div class="deco-shape shape-2">
          <img src="./assets/images/shape-2.png" alt="art shape" width="55">
        </div>
        <div class="deco-shape shape-3">
          <img src="./assets/images/shape-3.png" alt="art shape" width="120">
        </div>
        <div class="deco-shape shape-4">
          <img src="./assets/images/shape-4.png" alt="art shape" width="30">
        </div>

        <div class="home-left">

          <p class="section-subtitle">Welcome To Finance management system</p>

          <h1 class="main-heading">
            get loan at low 
            <span class="underline-img">Interest <img src="./assets/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            The best personal loans with the possibility of same-day funding are from LightStream. The company offers loans of Rs5,000 - Rs 100,000, with APRs of 3.99% - 19.99% and repayment periods of 3 - 6 months to people with credit scores of 660 or higher.
          </p>

          <div class="home-btn-group">
            <button class="btn btn-primary">
              <p class="btn-text">Explore More</p>
              <span class="square"></span>
            </button>

            <button class="btn btn-secondary">
              <p class="btn-text">Contact Us</p>
              <span class="square"></span>
            </button>
          </div>

        </div>




?>