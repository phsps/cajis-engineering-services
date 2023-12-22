<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAJIS | Constructon | Engineering</title>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" defer></script>
      <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script> -->
      <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="/your-path-to-uicons/css/uicons-[your-style].css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="assets/images/CAJIS-favicon.png" type="image/x-icon">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="./assets/css/style.css">
     <style>
        .drop-down{
            position: relative;
            display: block;
        }
        .drop-down-content{
            border: 1px solid black;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .drop-down:hover .drop-down-content{
            display: block;
        }
     </style>
</head>
<body>


      <!--====== HEADER =======-->
      <header class="header" id="header">
        <nav class="nav container">
            <a href="./" class="nav_logo">
                <img src="assets/images/CAJIS-ICON.png" alt="">
            </a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="./" class="nav_link">Home</a>
                    </li>

                    <li class="nav_item drop-down">
                        <a href="about_us" class="nav_link">About</a>
                        <!-- <ul class="drop-down-content">
                            <li><a href="">Company Overview</a></li>
                            <li><a href="">Company Objectives</a></li>
                        </ul> -->
                    </li>

                    <li class="nav_item">
                        <a href="our_services" class="nav_link">Services</a>
                    </li>

                    <li class="nav_item">
                        <a href="our_projects" class="nav_link">Projects</a>
                    </li>

                    <li class="nav_item">
                        <a href="contact_us" class="nav_link">Contact</a>
                    </li>
                </ul>


                 <!-----Close button-->
                 <div class="nav_close" id="nav-close">
                    <i class="bi bi-x"></i>
                 </div>
            </div>

            <!-----Toggle button------>
            <div class="nav_toggle" id="nav-toggle">
                <i class="bi bi-list"></i>
            </div>
        </nav>
     </header>