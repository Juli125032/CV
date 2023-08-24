<?php
 $url_base = "http://localhost/finalproject/";
 session_start();
 $session = false;
 if(!isset($_SESSION['user_id'])){
    $session = false;
 } else {
    $session = true;
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Juliana Deantonio</title>
    <link rel="stylesheet" href="css/Main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
    <header class="header regular-padding">
        <label for="menu" class="mobile-btn">
            <i class="bi bi-list"></i>
        </label>
        <input type="checkbox" name="menu" id="menu">
        <nav class="nav">
            <div class="logo">
                <img src="images/logo.png" alt="Logo" />
            </div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#about">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#services">Services</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#resume">Resume</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact">Contact</a>
                </li>
            </ul>
            <div>
                <button class="button button-secondary">
                    <i class="bi bi-download"></i>
                    <a target="_blank" href="files/HV.pdf" download>Download CV</a>
                </button>
                <?php 
                    if(!$session){
                        echo  "<a href='login.php' class='button button-secondary'><i class='bi bi-person'></i></a>";
                    } else {
                        echo "<a class='button button-secondary href='login.php'><i class='bi bi-box-arrow-right'></i></a>";
                    }
                ?>
                
            </div>
        </nav>
    </header>