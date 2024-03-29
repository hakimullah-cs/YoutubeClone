<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Youtube Clone</title>
    <link rel="icon" type="image" href="/Images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSSFiles/youtube.css">
    <link rel="stylesheet" href="./CSSFiles/youtubeResponsive.css">
  </head>
  <body class="text-light">
    <!-- ---------------- Header Start------------ -->
    <header class="header">
        <div class="container-fluid">
            <div class="navbar-main p-2 d-flex align-items-center justify-content-between">
                <div class="col-6 col-md-3 left-side d-flex align-items-center">
                   <div class="menu-icon">
                    <ion-icon name="menu-outline" class="" id="menu-icon"></ion-icon>
                   </div>
                   <div class="logo">
                    <a href="#"><img src="./Images/logo1.png" alt="" style="width: 65px; height: 50px;"></a>
                    <span class="fw-bold">Youtube<sup>PK</sup></span>
                   </div>
                    
                </div>
                <div class="center d-flex align-items-center col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control text-white" placeholder="Search" aria-label="Recipient's username" id="search" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-dark text-white" id="basic-addon2"><ion-icon name="search-outline" class="fs-4"></ion-icon></span>
                      </div>
                      
                </div>
                <div class="col-4 col-md-2 right-side d-flex align-items-center justify-content-end gap-3">
                  <div class="search-icon d-md-none">
                    <ion-icon name="search-outline" class="fs-3 fw-light"></ion-icon>
                  </div>
                   <div class="video-icon">
                    <ion-icon name="videocam-outline" class="fs-3 fw-light"></ion-icon>
                   </div>
                   <div class="notification-icon">
                    <ion-icon name="notifications-outline" class="fs-3 fw-light"></ion-icon>
                   </div>
                   <div class="profile">
                    <img src="./Images/Profile.jpeg" alt="profileimg" id="profile-pic" style="width: 40px; height: 40px; border-radius: 50%;">

                   </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ---------------- Header End------------ -->

     <!-- ------------------ Sidebar End--------------- -->
    <div class="profile-info">
      <div class="close-icon d-sm-none">
        <ion-icon name="close-outline" id="close"></ion-icon>
      </div>
       <div class="profile-content d-flex gap-3">
        <div class="profile-pic">
          <img src="./Images/Profile.jpeg" alt="" class="img-fluid" style="width: 40px; height: 40px; border-radius: 50%;">
        </div>
        <!-- <h1>Hello</h1> -->
        <div class="text">
          <p>Hakim Ullah <br>
            <span>@hakimullah8386</span> <br>
          <a href="#">Manage Your Google Account</a> </p>
        </div>
       </div>
       <hr>

      <ul class="navbar-list nav flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="person-circle-outline" class="fs-3"></ion-icon><span>Your Channel</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="logo-youtube" class="fs-3"></ion-icon><span>YouTube Studio</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="key-outline" class="fs-3"></ion-icon><span class="fs-5"><span>Switch Account</span><ion-icon name="chevron-forward-outline"></ion-icon></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3 mb-1"><ion-icon name="log-out-outline" class="fs-3"></ion-icon><span>SignOut</span></a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="logo-usd" class="fs-3"></ion-icon><span>Purchase and Memberships</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3 mb-1"><ion-icon name="people-outline" class="fs-3"></ion-icon><span>Your data in Youtube</span></a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="language-outline" class="fs-3"></ion-icon><span>Language:English</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="alert-outline" class="fs-3"></ion-icon><span>Restricted Mode:Off</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="globe-outline" class="fs-3"></ion-icon><span><span>Location:Pakistan</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="keypad-outline" class="fs-3"></ion-icon><span><span>Keyboard Shortcuts</span></a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="settings-outline" class="fs-3"></ion-icon><span><span>Settings</span></a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="help-outline" class="fs-3"></ion-icon><span><span>Help</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-flex align-items-center text-white gap-3"><ion-icon name="alert-outline" class="fs-3"></ion-icon><span><span>Send Feedback</span></a>
        </li>
      </ul>

      
    </div>

    <!-- ------------------ Sidebar Start--------------- -->
    <div class="d-flex">
    <div class="sidebar">
      <ul class="navbar-list nav flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2 active" style="background: #333;"><ion-icon name="home-outline" class="fs-4 me-2"></ion-icon> <span class="navlink-text">Home</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="pause-circle-outline" class="fs-4"></ion-icon> <span class="navlink-text">Shorts</span></a>
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="easel-outline" class="fs-4"></ion-icon> <span class="navlink-text">Subscriptions</span></a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="library-outline" class="fs-4"></ion-icon> <span class="navlink-text">Library</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="time-outline" class="fs-4"></ion-icon> <span class="navlink-text">History</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="videocam-outline" class="fs-4"></ion-icon> <span class="navlink-text">Your Videos</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="timer-outline" class="fs-4"></ion-icon> <span class="navlink-text">Wtach Later</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="chevron-down-outline" class="fs-4"></ion-icon> <span class="navlink-text">See More</span></a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="settings-outline" class="fs-4"></ion-icon> <span class="navlink-text">Settings</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="flag-outline" class="fs-4"></ion-icon> <span class="navlink-text">Report History</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="help-outline" class="fs-4"></ion-icon> <span class="navlink-text">Help</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center gap-2"><ion-icon name="alert-outline" class="fs-4"></ion-icon> <span class="navlink-text">Send feedback</span></a>
        </li>
        <!-- <hr> -->
       
      </ul>
    </div>
    <div class="main-content mt-2" id="main">
     <?php include 'main_content.php'; ?>
</div>
    <!-- ./sidebar -->
    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="./JSFiles/youtube.js"></script>
  </body>
</html>
