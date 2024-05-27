<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Login.html");
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cumolus</title>
    <link
      rel="icon"
      href="/Logo Cumolus/CulombusImage.PNG"
      type="image/x-icon"
    />
    <!-- Html Syle -->
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <!-- HTml Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <!-- JQuery -->
    <script src="jquery-3.7.1.js"></script>
    <script>
      $(document).ready(function () {
        $("#footer").load("footer.html");
      });
    </script>
  </head>
  <body>
    <div class="main-page">
      <div class="sidebar">
        <div class="iconImg5">
          <a class="logoCumolus" href="Home.html">
            <img src="/Logo Cumolus/Culombus2.PNG" />
          </a>
        </div>
        <div class="line"></div>
        <div class="main-list">
          <a class="mainImage" href="main.php">
            <img src="/item/Home.svg" />
            <span class="maintext1"> Home </span>
          </a>
        </div>
        <div class="main-list-home">
          <a class="mainImage" href="image.php">
            <img src="/item/mainImg.svg" />
            <span class="maintext1">Image</span>
          </a>
        </div>
        <div class="main-list">
          <a class="mainImage" href="#">
            <img src="/item/MainPrompt.svg" />
            <span class="maintext1">Prompt</span>
          </a>
        </div>
        <div class="main-list">
          <a class="mainImage" href="#">
            <img src="/item/MainCode.svg" />
            <span class="maintext1"> Code </span>
          </a>
        </div>
        <div class="main-list">
          <a class="mainImage" href="#">
            <img src="/item/MainCreator.svg" />
            <span class="maintext1"> Creator</span>
          </a>
        </div>
      </div>
      <div class="main-bar">
        <div class="main-menu">
          <div id="menu-button">
            <input type="checkbox" id="menu-checkbox" />
            <label for="menu-checkbox" id="menu-label">
              <div id="hamburger"></div>
            </label>
          </div>
        </div>
        <section class="main-header">
          <div class="popular">
            <a href="">Popular</a>
          </div>
          <div class="Newest">
            <a href="">Newest</a>
          </div>
          <form action="" method="">
            <div class="inputsearch">
              <input
                type="text"
                name="search"
                id="search"
                class="input-search"
                placeholder="Find Your Idea..."
              />
            </div>
            <div class="buttonSearch" type="submit" name="buttonSearch">
              <button>
                <img src="/item/search.svg" alt="" />
              </button>
            </div>
          </form>
          <div class="main-upload">
            <a href="">
              <img src="/item/upload.svg" alt="" />
              <span>Upload</span>
            </a>
          </div>
        </section>
      </div>
    </div>
    <div id="footermain"></div>
    <script>
      const menu = document.getElementById("menu-label");
      const sidebar = document.getElementsByClassName("sidebar")[0];

      menu.addEventListener("click", function () {
        sidebar.classList.toggle("hide");
      });
    </script>
  </body>
</html>

