<?php
session_start();
include('database_connection.php');


if(!isset($_SESSION['user_id']))
{
  header('location:login.php');
}
if(isset($_SESSION['user_id']))
{
  $user_id = $_SESSION['user_id'];
  $stmt = $pdo->query("select * from user where user_id='$user_id;'");

  $row = $stmt->fetch();

  $userPicture = !empty($row[17])?$row[17]:'assets/img/user.jpg';
  $userPictureURL = $userPicture;
  $username = $row[1];

} elseif (isset($_SESSION['org_id'])) {
  $org_id = $_SESSION['org_id'];
  $stmt = $pdo->query("select * from organization where org_id='$org_id;'");

  $row = $stmt->fetch();

  $userPicture = !empty($row[13])?$row[13]:'assets/img/user.jpg';
  $userPictureURL = $userPicture;
  $username = $row[2];
  
} else{
  $userPicture = 'assets/img/user.jpg';
  $userPictureURL = $userPicture;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Applications | Pahal</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css'> -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Farro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="assets/css/dash-image.css">
  <link rel="stylesheet" href="assets/css/application.css">
  <link href="/css/index.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body>

  <!-- partial:index.partial.html -->
  <section class="wrapper">
    <ul class="tabs">
      <li class="active">Applied</li>
      <li>Shortlisted</li>
      <!--<li>About</li>-->
    </ul>
  
    <ul class="tab__content">
      <li class="active">
        <div class="container-fluid">
          <div class="row">
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="content__wrapper">
            <div class="table-responsive">
            <table id="customers">
              <tr>
                <th>Company</th>
                <th>Applied on</th>
                <th>Application Status</th>
                <th>Job Role</th>
                <th>Location</th>
                <th>Skills required</th>
              </tr>
              <tr>
                <td>Feeding India</td>
                <td>15 April'21</td>
                <td>Applied</td>
                <td>Volunteering</td>
                <td>Kolkata</td>
                <td>Social servicing</td>
              </tr>
              <tr>
                <td>Bringle Exvellence</td>
                <td>25 March'21</td>
                <td>Applied</td>
                <td>Marketing</td>
                <td>Thane</td>
                <td>Marketing,communicational skills</td>
              </tr>
              <tr>
                <td>Aashman Foundation</td>
                <td>1 April'21</td>
                <td>Not selected</td>
                <td>Fundraiser</td>
                <td>Panchkula</td>
                <td>Communicational skills</td>
  
              </tr>
              <tr>
                <td>Evidyaloka</td>
                <td>7 April'21</td>
                <td>Applied</td>
                <td>Teacher</td>
                <td>Bengaluru</td>
                <td>Teaching</td>
              </tr>
              <tr>
                <td>Hamari Pahchan</td>
                <td>5 May'21</td>
                <td>Applied</td>
                <td>Crafting</td>
                <td>New Delhi</td>
                <td>Art and craft</td>
              </tr>
              
            </table>
            
            </div>
            </div>
      
          </main>
          </div>
        </div>
        </div>
      </li>
      <li>
        <div class="content__wrapper">
          <div class="table-responsive">
            <!-- <table id="customers">
              <tr>
                <th>Company</th>
                <th>Job Role</th>
                <th>Shortlist Date</th>
                <th>Location</th>
                <th>Salary</th>
              </tr>
              <tr>
                <td>Aaweg Charitable Trust</td>
                <td>Story Writing</td>
                <td>2 May'21</td>
                <td>New Delhi</td>
                <td>5k-10k</td>
              </tr>
              <tr>
                <td>Lost and Found Foundation</td>
                <td>Fundraising</td>
                <td>23 April'21</td>
                <td>Mumbai</td>
                <td>5k-7k</td>
              </tr>
              <tr>
                <td>Jivanam Asteya Organization</td>
                <td>Art and Craft</td>
                <td>31 April'21</td>
                <td>Surat</td>
                <td>7k-10k</td>
              </tr>
              <tr>
                <td>Badlav Seva Samiti</td>
                <td>Fundraising</td>
                <td>5 May'21</td>
                <td>Lucknow</td>
                <td>8k-10k</td>
              </tr>
              
              </table> -->
              <h4>Seems like no organization has shortlisted you.</h4>
              <h4 style="margin-top: 2px;">Have Patience you will be selected soon</h4>
              <img src="assets/img/application.png" style="max-width: 256px">
            </div>
          <!--<h2 class="text-color">Her</h2>
          
          <img src="http://lewihussey.com/codepen-img/her.jpg">-->
        </div>
      </li>
      <li>
        <div class="content__wrapper">
          <h2 class="text-color">About</h2>
          
          <p>Created by <a class="text-color" href="http://lewihussey.com" target="_blank">Code Smashers</a></p>
        </div>
      </li>
    </ul>
  </section>
  <?php 
    require_once("sidebar.php");
    sidebar($userPicture,$username,'','','','','','','',"sidebar-dropdown active-tab",'','');
  ?>
<!-- partial -->
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script  src="assets/js/dash-image.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- <script src="assets/js/dashboard.js"></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="assets/js/application.js"></script>
  <script src="./table.js"></script>

</body>

</html>