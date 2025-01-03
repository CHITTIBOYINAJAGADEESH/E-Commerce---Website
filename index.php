<?php
include('./includes/connect.php');
include('./functions/common_functions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Home Page</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
    <!-- upper-nav -->
    <div class="upper-nav primary-bg p-2 px-3 text-center text-break">
        <span>Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%! <a>Shop Now</a></span>
    </div>
    <!-- upper-nav -->
    <!-- Start NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Recycled Resigns</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./products.php">Products</a>
                    </li>
                    
                    <?php
                        if(isset($_SESSION['username'])){                            
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='./users_area/profile.php'>My Account</a>
                        </li>";
                        }
                        else{
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='./users_area/user_registration.php'>Register</a>
                        </li>";
                        }
                    ?>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./cart.php"><svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 27C11.5523 27 12 26.5523 12 26C12 25.4477 11.5523 25 11 25C10.4477 25 10 25.4477 10 26C10 26.5523 10.4477 27 11 27Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M25 27C25.5523 27 26 26.5523 26 26C26 25.4477 25.5523 25 25 25C24.4477 25 24 25.4477 24 26C24 26.5523 24.4477 27 25 27Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 5H7L10 22H26" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 16.6667H25.59C25.7056 16.6667 25.8177 16.6267 25.9072 16.5535C25.9966 16.4802 26.0579 16.3782 26.0806 16.2648L27.8806 7.26479C27.8951 7.19222 27.8934 7.11733 27.8755 7.04552C27.8575 6.97371 27.8239 6.90678 27.7769 6.84956C27.73 6.79234 27.6709 6.74625 27.604 6.71462C27.5371 6.68299 27.464 6.66661 27.39 6.66666H8" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <sup>
                                <?php
                                cart_item();
                                ?>
                            </sup>
                            <span class="d-none">
                                Total Price is: 
                                <?php
                                total_cart_price();
                                ?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" class="d-flex align-items-center gap-1" href="#">
                            <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 27V24.3333C24 22.9188 23.5224 21.5623 22.6722 20.5621C21.8221 19.5619 20.669 19 19.4667 19H11.5333C10.331 19 9.17795 19.5619 8.32778 20.5621C7.47762 21.5623 7 22.9188 7 24.3333V27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5 14C18.9853 14 21 11.9853 21 9.5C21 7.01472 18.9853 5 16.5 5C14.0147 5 12 7.01472 12 9.5C12 11.9853 14.0147 14 16.5 14Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <?php
                                if(!isset($_SESSION['username'])){
                                    echo "<span>
                                    Welcome guest
                                </span>";
                            }else{
                                    echo "<span>
                                    Welcome ".$_SESSION['username']. "</span>";
                                }
                                ?>
                        </a>
                    </li>
                    <?php
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/user_login.php'>
                            Login
                        </a>
                    </li>";
                }else{
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/logout.php'>
                            Logout
                        </a>
                    </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End NavBar -->

    <!-- Start Landing Section -->
    <div class="landing">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 p-md-0 tabs-categ">
                    <ul class="p-md-0 d-flex flex-column gap-3 pt-md-3">
                        <li>Corporative wear&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>
                        </li>
                        <li>T-shirts for men
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>
                        </li>
                        <li>Toys</li>
                        <li>Decerative Items</li>
                        <li>Bags</li>
                        <li>Lamps</li>
                        <li>T-shirts for women</li>
                        <li>sarees</li>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-9 d-none d-sm-none d-md-block pt-md-4">
                    <div class="cover">
                        <span class="title">Iphone 14 series</span>
                        <span class="desc">Up to 10%<br />off Voucher</span>
                        <a href="#">Shop now -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Landing Section -->
    <!-- Start Category  -->
    <div class="category">
        <div class="container">
            <div class="categ-header">
                <div class="sub-title">
                    <span class="shape"></span>
                    <span class="title">Categories</span>
                </div>
                <h2>Browse By Category</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <span>
                    <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
    viewBox="0 0 32 32" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" xml:space="preserve">
    <style type="text/css">
        .st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
        .st1{fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
    </style>
    <path class="st0" d="M14.7,16c-1.6-1.1-2.7-2.9-2.7-5c0-3.5,3.1-6.4,6.7-6c2.6,0.3,4.8,2.4,5.2,5.1c0.4,2.7-1,5-3.1,6.2
        c2.6,0.8,4.5,3.4,4.1,6.4c-0.3,3.1-3.1,5.3-6.2,5.3L12,28c-3.3,0-6-2-7-6v-8l0.8,0.6C7.9,16.2,10.4,17,13,17h0"/>
    <line class="st0" x1="20" y1="9" x2="20" y2="12"/>
    <path class="st0" d="M23.2,14c1.8-0.1,3.5-0.9,4.6-2.4L29,10h-5"/>
    <path class="st0" d="M19,22c0,1.7-1.3,3-3,3c-4,0-5-3-5-3s3.3-3,5-3S19,20.3,19,22z"/>
</svg>

                    </span>
                    <span>Toys</span>
                </div>
                <div class="card">
                    <span>
                    <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
    <svg height="100%" width="100%" viewBox="0 0 505.6 505.6" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
        <path style="fill:#2FADF4;" d="M252.8,0c-20,0-35.2,16-35.2,35.2c0,20,16,35.2,35.2,35.2s35.2-16,35.2-35.2S272.8,0,252.8,0z M252.8,48c-6.4,0-12-5.6-12-12s5.6-12,12-12s12,5.6,12,12S259.2,48,252.8,48z"/>
        <path style="fill:#0D7DC9;" d="M468,316.8h-42.4c0-96-77.6-173.6-173.6-173.6S79.2,220.8,79.2,316.8H37.6 c0-120,96.8-215.2,215.2-215.2S468,196.8,468,316.8z"/>
        <path style="fill:#2FADF4;" d="M252.8,116.8c113.6,0,207.2,88,214.4,200h0.8c0-120-96.8-215.2-215.2-215.2S37.6,196.8,37.6,316.8 h0.8C45.6,204.8,139.2,116.8,252.8,116.8z"/>
        <g>
            <circle style="fill:#AAAAAA;" cx="252.8" cy="164" r="6.4"/>
            <circle style="fill:#AAAAAA;" cx="252.8" cy="192.8" r="6.4"/>
            <circle style="fill:#AAAAAA;" cx="252.8" cy="221.6" r="6.4"/>
            <circle style="fill:#AAAAAA;" cx="252.8" cy="250.4" r="6.4"/>
            <circle style="fill:#AAAAAA;" cx="252.8" cy="279.2" r="6.4"/>
            <circle style="fill:#AAAAAA;" cx="252.8" cy="308" r="6.4"/>
        </g>
        <polygon style="fill:#930941;" points="252.8,325.6 274.4,407.2 347.2,394.4 284.8,455.2 311.2,505.6 252.8,474.4 194.4,505.6 220.8,455.2 158.4,394.4 231.2,407.2 "/>
        <g>
            <path style="fill:#AAAAAA;" d="M182.4,180c0,2.4-1.6,4-4,4s-4-1.6-4-4s1.6-4,4-4S182.4,178.4,182.4,180z"/>
            <!-- [repeated paths] -->
        </g>
        <!-- [rest of the paths and shapes go here as needed] -->
    </svg>
</div>



                    </span>
                    <span>Decerative Items</span>
                </div>
                <div class="card">
                    <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
    xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" 
    viewBox="0 0 500 500" xml:space="preserve">
  <g transform="translate(10, 10) scale(0.9, 0.9)">
    <rect x="200" y="312" style="fill:#D6D6D6;" width="112" height="152"/>
    <path style="fill:#00233F;" d="M336,112.8c0,39.2-32,71.2-71.2,71.2H232c-40,0-72-32-72-71.2V112c0-40,32-72,71.2-72H264
        c40,0,72,32,72,71.2V112.8z"/>
    <rect x="192" y="216" style="fill:#F9BDA0;" width="112" height="96"/>
    <polygon style="fill:#E28F71;" points="304,312 248,312 188.8,216 304,216 "/>
    <path style="fill:#FCCCB9;" d="M336,137.6c0,69.6-43.2,132.8-88,132.8s-88-63.2-88-132.8S203.2,56,248,56S336,68,336,137.6z"/>
    <path style="fill:#F9BDA0;" d="M248,56c44.8,0,88,12,88,81.6s-43.2,132.8-88,132.8"/>
    <path style="fill:#00233F;" d="M274.4,48c0,8.8-7.2,16-16,16h-20.8c-8.8,0-16-7.2-16-16l0,0c0-8.8,7.2-16,16-16h20.8
        C267.2,32,274.4,39.2,274.4,48L274.4,48z"/>
    <polygon style="fill:#0C537A;" points="185.6,287.2 32,343.2 0,464 242.4,464 "/>
    <polygon style="fill:#00233F;" points="185.6,287.2 60,359.2 32,464 242.4,464 "/>
    <polygon style="fill:#D6D6D6;" points="184.8,275.2 148.8,290.4 173.6,359.2 240,460.8 240,316 "/>
    <polygon style="fill:#FFFFFF;" points="184.8,275.2 247.2,316 176,352.8 "/>
    <polygon style="fill:#0C537A;" points="310.4,287.2 464,343.2 496,464 253.6,464 "/>
    <polygon style="fill:#00233F;" points="310.4,287.2 436,359.2 464,464 253.6,464 "/>
    <polygon style="fill:#D6D6D6;" points="311.2,275.2 347.2,290.4 322.4,359.2 256,460.8 256,316 "/>
    <polygon style="fill:#FFFFFF;" points="311.2,275.2 249.6,316 320.8,352.8 "/>
    <polygon style="fill:#EF4391;" points="240,350.4 240,329.6 184,306.4 184,370.4 "/>
    <polygon style="fill:#D81665;" points="240,350.4 240,329.6 193.6,332.8 184,370.4 "/>
    <polygon style="fill:#BC085A;" points="242.4,349.6 240,329.6 204,350.4 184,370.4 "/>
    <polygon style="fill:#EF4391;" points="256,350.4 256,329.6 312,306.4 312,370.4 "/>
    <polygon style="fill:#D81665;" points="256,350.4 256,329.6 302.4,332.8 312,370.4 "/>
    <polygon style="fill:#BC085A;" points="253.6,349.6 256,329.6 292,350.4 312,370.4 "/>
    <path style="fill:#911955;" d="M343.2,404.8c0-11.2,7.2-20,16-20s16,8.8,16,20s-7.2,5.6-16,5.6C349.6,409.6,343.2,415.2,343.2,404.8
        z"/>
    <g>
        <path style="fill:#AF2564;" d="M396,404.8c0-11.2-7.2-20-16-20s-16,8.8-16,20s7.2,5.6,16,5.6S396,415.2,396,404.8z"/>
        <path style="fill:#AF2564;" d="M389.6,396c0,12.8-8.8,23.2-20.8,23.2S348,408.8,348,396c0-12.8,9.6-6.4,20.8-6.4
            S389.6,383.2,389.6,396z"/>
    </g>
    <path style="fill:#911955;" d="M369.6,389.6c11.2,0,20.8-6.4,20.8,6.4s-8.8,23.2-20.8,23.2"/>
    <path style="fill:#12AF6B;" d="M376,441.6c0,3.2-3.2,6.4-6.4,6.4h-3.2c-3.2,0-6.4-3.2-6.4-6.4v-27.2c0-3.2,3.2-6.4,6.4-6.4h3.2
        c3.2,0,6.4,3.2,6.4,6.4V441.6z"/>
    <path style="fill:#028952;" d="M360,414.4c0-6.4,4.8-6.4,8-6.4h1.6c3.2,0,6.4,3.2,6.4,6.4v27.2c0,3.2-3.2,6.4-6.4,6.4l0,0"/>
    <path style="fill:#E250A0;" d="M375.2,440H360c0,0-12.8,2.4-14.4-5.6c-0.8-8,0-34.4-11.2-37.6c0,0,8.8-5.6,19.2,2.4
        c9.6,8,3.2,8.8,19.2,16.8C376.8,417.6,375.2,440,375.2,440z"/>
    <path style="fill:#CC3B84;" d="M352.8,398.4c9.6,8,3.2,8,19.2,16c4.8,2.4,2.4,25.6,2.4,25.6H360"/>
    <path style="fill:#AF2564;" d="M364,440h15.2c0,0,12.8,2.4,14.4-5.6c0.8-8,0-34.4,11.2-37.6c0,0-8.8-5.6-19.2,2.4
        c-9.6,8-3.2,8.8-19.2,16.8C362.4,417.6,364,440,364,440z"/>
    <path style="fill:#911955;" d="M360,440h19.2c0,0,12.8,2.4,14.4-5.6c0.8-8,0-34.4,11.2-37.6c0,0-10.4-7.2-20.8,0.8"/>
    <g>
        <circle style="fill:#12AF6B;" cx="248" cy="383.2" r="6.4"/>
        <circle style="fill:#12AF6B;" cx="248" cy="418.4" r="6.4"/>
    </g>
    <path style="fill:#D81665;" d="M256,344.8c0,4-3.2,7.2-7.2,7.2H248c-4,0-7.2-3.2-7.2-7.2V328c0-4,3.2-7.2,7.2-7.2h0.8
        c4,0,7.2,3.2,7.2,7.2V344.8z"/>
    <path style="fill:#BC085A;" d="M256,328v20c0,4-4,7.2-8,7.2l0,0c-4,0-8-3.2-8-7.2v-20"/>
  </g>
</svg>




                    </span>
                    <span>Coorporative wear</span>
                </div>
                <div class="card">
                <svg fill="#000000" height="100px" width="100px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" xml:space="preserve">
  <g transform="translate(20, 20) scale(0.9, 0.9)">
    <path d="M147.763,44.074c12.801,0,23.858-8.162,27.83-20.169c-7.578,2.086-17.237,3.345-27.83,3.345
            c-10.592,0-20.251-1.259-27.828-3.345C123.905,35.911,134.961,44.074,147.763,44.074z"/>
    <path d="M295.158,58.839c-0.608-1.706-1.873-3.109-3.521-3.873l-56.343-26.01c-11.985-4.06-24.195-7.267-36.524-9.611
            c-0.434-0.085-0.866-0.126-1.292-0.126c-3.052,0-5.785,2.107-6.465,5.197c-4.502,19.82-22.047,34.659-43.251,34.659
            c-21.203,0-38.749-14.838-43.25-34.659c-0.688-3.09-3.416-5.197-6.466-5.197c-0.426,0-0.858,0.041-1.292,0.126
            c-12.328,2.344-24.538,5.551-36.542,9.611L3.889,54.965c-1.658,0.764-2.932,2.167-3.511,3.873
            c-0.599,1.726-0.491,3.589,0.353,5.217l24.46,48.272c1.145,2.291,3.474,3.666,5.938,3.666c0.636,0,1.281-0.092,1.917-0.283
            l27.167-8.052v161.97c0,3.678,3.001,6.678,6.689,6.678h161.723c3.678,0,6.67-3.001,6.67-6.678V107.66l27.186,8.052
            c0.636,0.191,1.28,0.283,1.915,0.283c2.459,0,4.779-1.375,5.94-3.666l24.469-48.272C295.629,62.428,295.747,60.565,295.158,58.839z"/>
  </g>
</svg>


                    </span>
                    <span>T-shirts</span>
                </div>
                <div class="card">
                    <span>
                    <svg fill="#000000" height="100%" width="100%" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
    viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet" xml:space="preserve">
    <g>
        <g>
            <path d="M381.35,173.022c-27.597-26.283-57.088-83.294-57.088-164.489c0-4.71-3.823-8.533-8.533-8.533H196.262
                c-4.71,0-8.533,3.823-8.533,8.533c0,81.195-29.491,138.206-57.079,164.489c-2.526,2.406-3.337,6.11-2.039,9.353
                c1.297,3.234,4.437,5.359,7.919,5.359h238.933c3.49,0,6.622-2.125,7.927-5.359C384.687,179.132,383.876,175.428,381.35,173.022z"/>
        </g>
    </g>
    <g>
        <g>
            <path d="M340.151,465.016c0.009,0-13.918-23.27-18.253-30.362c-5.265-10.615-19.746-18.927-40.311-22.827l0.009-16.623
                c16.29-15.334,31.659-40.482,37.308-64.324c7.262-30.652-1.161-56.653-23.27-72.875c-3.388-2.859-5.111-5.76-5.257-8.875
                c-0.239-5.367,4.087-10.982,5.743-12.655c2.313-2.287,3.132-5.692,2.108-8.781l-5.692-17.067c-1.161-3.482-4.42-5.828-8.09-5.828
                h-56.892c-3.669,0-6.938,2.347-8.098,5.837l-5.692,17.067c-1.016,3.046-0.188,6.451,2.065,8.738
                c1.69,1.715,6.025,7.33,5.786,12.698c-0.145,3.115-1.86,6.016-4.804,8.525c-22.562,16.572-30.985,42.581-23.723,73.233
                c5.649,23.834,21.018,48.981,37.308,64.316v16.631c-20.284,3.84-34.662,11.989-40.098,22.4
                c-7.236,11.93-18.466,30.788-18.466,30.788c-0.759,1.297-1.169,2.79-1.169,4.301c0,22.332,40.678,42.667,85.333,42.667
                c44.655,0,85.333-20.335,85.333-42.667C341.329,467.814,340.928,466.321,340.151,465.016z M255.996,460.8
                c-31.761,0-51.2-11.11-51.2-17.161c0-4.224,9.899-11.358,27.938-14.95c4.036,8.849,12.919,15.044,23.262,15.044
                c10.351,0,19.285-6.178,23.313-15.036c18.014,3.593,27.887,10.726,27.887,14.942C307.196,449.69,287.757,460.8,255.996,460.8z"/>
        </g>
    </g>
</svg>

                    </span>
                    <span>Lamps</span>
                </div>
                <div class="card">
                    <span>
                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0001 2.75C10.7574 2.75 9.75006 3.75736 9.75006 5V5.25447C10.1676 5.24999 10.6183 5.25 11.1053 5.25H12.8948C13.3819 5.25 13.8326 5.24999 14.2501 5.25447V5C14.2501 3.75736 13.2427 2.75 12.0001 2.75ZM15.7501 5.30694V5C15.7501 2.92893 14.0711 1.25 12.0001 1.25C9.929 1.25 8.25006 2.92893 8.25006 5V5.30694C8.11506 5.31679 7.98479 5.32834 7.85904 5.34189C6.98068 5.43657 6.24614 5.63489 5.59385 6.08197C5.3695 6.23574 5.15877 6.40849 4.96399 6.59833C4.39766 7.15027 4.05914 7.83166 3.79405 8.67439C3.53667 9.49258 3.32867 10.5327 3.06729 11.8396L3.04822 11.935C2.67158 13.8181 2.37478 15.302 2.28954 16.484C2.20244 17.6916 2.32415 18.7075 2.89619 19.588C3.08705 19.8817 3.30982 20.1534 3.56044 20.3982C4.31157 21.1318 5.28392 21.4504 6.48518 21.6018C7.66087 21.75 9.17418 21.75 11.0946 21.75H12.9055C14.826 21.75 16.3393 21.75 17.5149 21.6018C18.7162 21.4504 19.6886 21.1318 20.4397 20.3982C20.6903 20.1534 20.9131 19.8817 21.1039 19.588C21.676 18.7075 21.7977 17.6916 21.7106 16.484C21.6254 15.3021 21.3286 13.8182 20.9519 11.9351L20.9328 11.8396C20.6715 10.5327 20.4635 9.49259 20.2061 8.67439C19.941 7.83166 19.6025 7.15027 19.0361 6.59833C18.8414 6.40849 18.6306 6.23574 18.4063 6.08197C17.754 5.63489 17.0194 5.43657 16.1411 5.34189C16.0153 5.32834 15.8851 5.31679 15.7501 5.30694ZM8.01978 6.83326C7.27307 6.91374 6.81176 7.06572 6.44188 7.31924C6.28838 7.42445 6.1442 7.54265 6.01093 7.67254C5.68979 7.98552 5.45028 8.40807 5.22492 9.12449C4.99463 9.85661 4.80147 10.8172 4.52967 12.1762C4.14013 14.1239 3.8633 15.5153 3.78565 16.5919C3.70906 17.6538 3.83838 18.2849 4.15401 18.7707C4.2846 18.9717 4.43702 19.1576 4.60849 19.3251C5.02293 19.7298 5.61646 19.9804 6.67278 20.1136C7.74368 20.2486 9.1623 20.25 11.1486 20.25H12.8515C14.8378 20.25 16.2564 20.2486 17.3273 20.1136C18.3837 19.9804 18.9772 19.7298 19.3916 19.3251C19.5631 19.1576 19.7155 18.9717 19.8461 18.7707C20.1617 18.2849 20.2911 17.6538 20.2145 16.5919C20.1368 15.5153 19.86 14.1239 19.4705 12.1762C19.1987 10.8173 19.0055 9.85661 18.7752 9.12449C18.5498 8.40807 18.3103 7.98552 17.9892 7.67254C17.8559 7.54265 17.7118 7.42445 17.5582 7.31924C17.1884 7.06572 16.7271 6.91374 15.9803 6.83326C15.2173 6.75101 14.2374 6.75 12.8515 6.75H11.1486C9.76271 6.75 8.78285 6.75101 8.01978 6.83326ZM8.92103 14.2929C9.31156 14.1548 9.74006 14.3595 9.87809 14.7501C10.1873 15.625 11.0218 16.25 12.0003 16.25C12.9787 16.25 13.8132 15.625 14.1224 14.7501C14.2605 14.3595 14.6889 14.1548 15.0795 14.2929C15.47 14.4309 15.6747 14.8594 15.5367 15.2499C15.0222 16.7054 13.6342 17.75 12.0003 17.75C10.3663 17.75 8.97827 16.7054 8.46383 15.2499C8.3258 14.8594 8.53049 14.4309 8.92103 14.2929Z" fill="#1C274C"/>
</svg>







                    </span>
                    <span>Bags</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Category  -->
    <!-- Start Advertise  -->
    <div class="adver">
        <div class="container">
            <div class="cover">
                <span class="title">Categories</span>
                <span class="desc">Enhance Your<br />Experiance</span>

                <button onclick="location.href='#'">
                    Buy Now!
                </button>
            </div>
        </div>
    </div>
    <!-- End Advertise  -->
    <!-- Start Products  -->
    <div class="products">
        <div class="container">
            <div class="categ-header">
                <div class="sub-title">
                    <span class="shape"></span>
                    <span class="title">Our Products</span>
                </div>
                <h2>Explore Our Products</h2>
            </div>
            <div class="row mb-3">
                <?php
                getProduct(3);
                getIPAddress();
                ?>
            </div>
            <div class="view d-flex justify-content-center align-items-center">
                <button onclick="location.href='./products.php'">View All Products</button>
            </div>
        </div>
    </div>
    <!-- End Products  -->














    <!-- divider  -->
    <!-- <div class="container">
        <div class="divider"></div>
    </div> -->
    <!-- divider  -->




    <!-- Start Footer -->
    <!-- <div class="upper-nav primary-bg p-2 px-3 text-center text-break">
        <span>All CopyRight &copy;2023</span>
    </div> -->
    <!-- End Footer -->

    <script src="./assets/js/bootstrap.bundle.js"></script>
</body>

</html>