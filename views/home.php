<?php


require '../controller/config.php';
if(!empty($_SESSION["id"])){
$id = $_SESSION["id"];
$result = mysqli_query($conn , "SELECT * FROM users WHERE id = '$id'  ") ;
$row = mysqli_fetch_assoc($result);

}
else {
    header("Location: registeration.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- <link rel="stylesheet" href="../CSS/home.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    <?php include "../public/CSS/home.css" ?>
  </style>
</head>


<body>
  <nav>
    <div class="logo">Website name</div>
    <ul>
      <li><a href="#">Home
          <span class="fa fa-home"></span>
        </a>
      </li>
      <li>
        <a href="#">Features
          <span class="fa fa-gift"></span>
        </a>
        <ul>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Elements</a></li>
          <li><a href="#">Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Services
          <span class="fa fa-gear"></span>
        </a>
        <ul>
          <li><a href="#">Service 1</a></li>
          <li><a href="#">Service 2</a></li>
          <li>
            <a href="#">More
              <span class="fa fa-plus"></span>
            </a>
            <ul>
              <li><a href="#">Submenu-1</a></li>
              <li><a href="#">Submenu-2</a></li>
              <li><a href="#">Submenu-3</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#">Contact
          <span class="fa fa-handshake-o"></span>
        </a></li>
      <li><a href="#">Profile
          <span class="fa fa-user"></span>
        </a>
        <ul>
          <li><a href="profilesettings.php">profile settings</a></li>
          <li> <a href="logout.php">logout</a></li>
          <?php 
          if($row["admin"] ==1){
            echo "<li> <a href='adminDashboard.php'>Admin dasboard</a></li> ";
          }
          ?>
        </ul>
      </li>
      <!-- 
      <li>
        <div class="search-box" action="#" method="get">
          <input class="input-search" type="text" placeholder="Search...">

        </div>
      <li>
        <button class="btn-search"><i class="fa fa-search"></i></button>
      </li>
      </li> -->
    </ul>
  </nav>
  <h1>Welcome ya <?php echo  $row["firstname"] . " " .  $row["lastname"] ." <3" ?></h1>

</body>

</html>