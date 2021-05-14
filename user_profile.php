<?php
session_start();
include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Profile | Pahal</title>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic|Open+Sans:300,400,500,700|Waiting+for+the+Sunrise|Shadows+Into+Light' rel='stylesheet' type='text/css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> <!--Skills css--> 
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link rel="stylesheet" href="assets/css/profile-skill.css">
  <link rel="stylesheet" href="assets/css/profile-style.css">
  <link rel="stylesheet" href="assets/css/profile-form.css">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  
</head>

<body>
<div class="container">
  <div class="flex-container1"> 

    <div class="card1" href="#">
      <h3>Personal Details</h3>  
      <table class="cleft">
        <tr>
          <td class="aayuedit">Full Name</td><td>:</td><td>Aasyushi Bahukhandi</td>
        </tr>
        <tr>
          <td class="aayuedit">Contact</td><td>:</td><td>8949857096</td>
        </tr>
        <tr>
          <td class="aayuedit">Email id</td><td>:</td><td>aayushib1908@gmail.com</td>
        </tr>
        <tr>
          <td class="aayuedit">Location</td><td>:</td><td>Ajmer</td>
        </tr>
        <tr>
          <td class="aayuedit">Address</td><td>:</td><td>825, Pragati Nagar, Kotra, Ajmer</td>
        </tr>
      </table>
      <table class="cright">
        <tr>
          <td class="aayuedit2">Date of Birth</td><td>:</td><td>19/08/2000</td>
        </tr>
        <tr>
          <td class="aayuedit2">Marital Status</td><td>:</td><td>Single</td>
        </tr>
        <tr>
          <td class="aayuedit2">Language(s)</td><td>:</td><td>English, Hindi</td>
        </tr>  
      </table>
      <div class="go-corner" href="#">
        <div class="go-arrow"><i onclick="openForm1()" class="fa fa-pencil" style="color:white; cursor: pointer;"></i></div>
      </div>
    </div>

    <div class="card2" href="#">
      <h3>Highest Qualfication</h3> 
      <div class="aayueducation">
        <div class="aayudegree">B. Tech.<br>Computer Science & Engineering</div>
        <div class="aayuinstitute">JECRC Foundation</div>
        <div class="aayuyear">
          <div style="display: inline;">2018-Present</div>
        </div>
        <div class="aayumarks">RTU: 99%</div>
      </div> 
      <!-- <div class="aayueducation">
        <div class="aayudegree">Senior Secondary(XII), Science</div>
        <div class="aayuinstitute">Bright India Public School, Ajmer</div>
        <div class="aayuyear">
          <div style="display: inline;">2016-2018</div>
          <div class="aayumarks">CBSE Board: 86.0%</div>
        </div>
      </div> 
      <div class="aayueducation">
        <div class="aayudegree">Secondary (X)</div>
        <div class="aayuinstitute">Queen Mary's Girls School, Ajmer</div>
        <div class="aayuyear">
          <div style="display: inline;">2003-2016</div>
          <div class="aayumarks">CBSE Board: 10.0 CGPA</div>
        </div>
      </div>  -->
      <div class="go-corner" href="#">
        <div class="go-arrow">
          <i onclick="openForm2()" class="fa fa-pencil" style="color:white; cursor: pointer;"></i>
        </div>
      </div>
    </div>
   
    <div class="card3" href="#">
        <h3>Skills</h3>    
        <div class="wrapper clearfix">
          <div class="right">
            <div class="inner">
              <section>
                <ul class="skill-set">
                  <li>Mobile Development</li>
                  <li>Xamarin</li>
                  <li>CSS3</li>
                  <li>Adobe Photoshop</li>
                  <li>HTML5</li>
                  <li>CSS3</li>
                  <li>JQUERY</li>
                  <li>UI Design</li>
                  <li>Company Branding</li>
                  <li>Responsive Web Design</li>
                </ul>
              </section>
            </div>
          </div>
        </div>
        <div class="go-corner" href="#">
          <div class="go-arrow"><i onclick="openForm3()" class="fa fa-pencil" style="color:white; cursor: pointer;"></i></div>
        </div>
    </div>
      
    <div class="card4" href="#">
      <h3>Experience</h3>
      <div class="aayuexp">
        <table style="width:100%">
          <tr>
            <td class="aayucomp">Infosys Ltd</td><td class="aayuprofile">Front End Developer</td>
          </tr>
          <tr valign="top">
            <td class="aayudur">Sept 2016 - Present</td><td class="aayudesc">Mangaing complete Front end development Majorly working with UI and Code review, Deployment.</td>
          </tr>
        </table>
      </div>    
      <div class="aayuexp">
        <table style="width:100%">
          <tr>
            <td class="aayucomp">Xchanging Technologies</td><td class="aayuprofile">Web Developer</td>
          </tr>
          <tr valign="top">
            <td class="aayudur">Aug 2015 - Aug 2016</td><td class="aayudesc">Heading whole front end work. Managing team and Client with following Agile Development Methodology. Taking care of Complete Front End and Back end integration with REST services.  </td>
          </tr>
        </table>
      </div>    
      <div class="go-corner" href="#">
        <div class="go-arrow">
          <i onclick="openForm4()" class="fa fa-pencil" style="color:white; cursor: pointer;"></i>
        </div>
      </div>
    </div>
 
  </div>

</div>
<span style="color: rgb(43,43,43,0.5);">
  <div class="body form-popup" id="myForm1" style="background-color: #000000ad">
    <div class="form-container">
      <form action="/action_page.php">
        <h2 style="color: #222222; font-weight: 600; font-size: 30px;">Personal Details</h2>

        <label for="name" class="ash-label"><b>Full Name</b></label>
        <input type="text" class="ash-input" placeholder="Enter your Full Name" name="name" required><br>
        <label for="mobile" class="ash-label"><b>Mobile Number</b></label>
        <input type="text" class="ash-input" placeholder="Enter your Mobile Number" name="mobile" required><br>
        <label for="gender" class="ash-label"><b>Gender</b></label>
        <select name="gender" id="gender" class="ash-select">
          <option value="" disabled selected>Enter your gender</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="none">Rather Not to Say</option>
        </select><br>

        <label for="city" class="ash-label"><b>State</b></label>
        <select class="ash-select" onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" required> 
          <option value="" disabled selected>Select State</option>
        </select><br>
        
        <label for="city" class="ash-label"><b>City</b></label>
        <select class="ash-select" name="city" id ="state" required><option value="" disabled selected hidden>Select City</option></select><br>
        
        <label for="address" class="ash-label"><b>Address</b></label>
        <input type="text" class="ash-input" placeholder="Enter your address" name="address" required><br>
        
        <label for="dob" class="ash-label"><b>Date of Birth</b></label>
        <input type="text" onfocus="(this.type='date')" class="ash-input" placeholder="Enter your Date of Birth" name="dob" min="1940-01-01" max="2021-05-25" required><br>
       
        <label for="mstatus" class="ash-label"><b>Maritial Status</b></label>
        <select name="mstatus" id="mstatus" class="ash-select">
          <datalist id="mstatus">
            <option value="" disabled selected>Enter your marital status</option>
            <option value="M">Married</option>
            <option value="U">Unmarried</option>
            <option value="W">Widowed</option>
            <option value="D">Divorced</option>
          </datalist>
        </select><br>
        
        <label for="lan" class="ash-label"><b>Language(s)</b></label>
        <select name="lan" id="lan" class="ash-select">
          <option value="" disabled selected>Select language(s) you know</option>
          <option value="M">Hindi</option>
          <option value="U">English</option>
          <option value="L">Any Other Local Language</option>
        </select><br><br>
        <script language="javascript">print_state("sts");</script>

        <center><button type="submit" class="btn" style="font-size: 15px;
          font-weight: 600;">SAVE</button></center>
      </form>
      <div class="go-corner-form" href="#">
        <div class="go-arrow">
          <i onclick="closeForm()" class="fa fa-close" style="color:white; cursor: pointer;"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="body form-popup" id="myForm2" style="background-color: #000000ad">
    <div class="form-container">
      <form action="/action_page.php">
        <h2>Highest Qualification</h2>
        <label for="degree" class="ash-label"><b>Select your Degree</b></label>
        <input list="Qualfication" class="ash-input" name="Qualfication" id="browser" placeholder="Highest Qualfication">
        <datalist id="Qualfication" class="ash-datalist">
          <option value="PhD"></option>
          <option value="Masters"></option>
          <option value="Bachelors"></option>
          <option value="Diploma"></option>
          <option value="Senior Secondary(XII)"></option>
          <option value="Secondary(X)"></option>
        </datalist><br>
        <label for="yop" class="ash-label"><b>Year Of Passing</b></label>
        <input type="number" class="ash-input" name="yop"  min="1940" max="2021" placeholder="Year of Passing" /><br>
        <label for="institute" class="ash-label"><b>Institute</b></label>
        <input type="text" class="ash-input" name="institute" placeholder="Institution" />
        <label for="percentage" class="ash-label"><b>Aggregate/Percentage</b></label>
        <input type="number" class="ash-input" name="percentage"  min="1" max="100" placeholder="Percentage" /><br><br>
        
        <center><button type="submit" class="btn">SAVE</button></center>
      </form>
      <div class="go-corner-form" href="#">
        <div class="go-arrow">
          <i onclick="closeForm()" class="fa fa-close" style="color:white; cursor: pointer;"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="body form-popup" id="myForm3" style="background-color: #000000ad">
    <div class="form-container">
      <form action="/action_page.php">
        <h2 style="font-size: 30px; font-weight: 600; color: #222222;">Skills</h2>
        <div>
          <label for="skill" class="ash-label"><b>Select your skills</b></label>
          <select name="skills" class="ash-select" multiple data-multi-select-plugin>
            <option value="Customer Support">Customer Support</option>
            <option value="Sewing">Sewing</option>
            <option value="MS Excel">MS Excel</option>
            <option value="MS Word">MS Word</option>
            <option value="Data Handling">Data Handling</option>
            <option value="Handmade Gifts">Handmade Gifts</option>
          </select>
        </div><br>

        <center><button type="submit" class="btn" style="font-size: 13px; font-weight: 600;">SAVE</button>
        </center>
      </form>
      <div class="go-corner-form" href="#">
        <div class="go-arrow">
          <i onclick="closeForm()" class="fa fa-close" style="color:white; cursor: pointer;"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="body form-popup" id="myForm4" style="background-color: #000000ad">
    <div class="form-container">
      <form action="/action_page.php">
        <h2 style="color: #222222; font-weight: 600; font-size: 30px;">Experience</h2>
        <div>
          <div class="customer_records1">
            <label for="types" class="ash-label"><b>Employement Type</b></label>
            <input list="types" class="ash-input" name="emps" id="browser" placeholder="Type of Employement">
            <datalist id="types">
              <option value="Self Employed">
              <option value="Employee">
            </datalist><br>
            <label for="lan" class="ash-label"><b>Skill</b></label>
            <input name="skill" class="ash-input" type="text" placeholder="Skill"><br>
            <label for="dur" class="ash-label"><b>Duration</b></label>
            <input name="dur" class="ash-input" type="number" placeholder="Duration in Months"><br>
            <label for="desc" class="ash-label"><b>Short Description</b></label>
            <textarea style="float: right; resize: none; height: 60px;" name="desc" class="form-control" rows="7" placeholder="Short Description"></textarea><br>
          </div>
          <div class="customer_records_dynamic1"></div>
        </div><br><br>
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
        <a class="extra-fields-customer1" href="#"><i class="fa fa-plus"></i> Add other</a><br>
        <button type="submit" class="btn">SAVE</button>
      </div>
      </form>
      <div class="go-corner-form" href="#">
        <div class="go-arrow">
          <i onclick="closeForm()" class="fa fa-close" style="color:white; cursor: pointer;"></i>
        </div>
      </div>
    </div>
  </div>
</span>
<div class="s-layout">
  <div class="s-layout__sidebar">
    <a class="s-sidebar__trigger" href="#0">
      <i class="fa fa-bars"></i>
    </a>

    <nav class="s-sidebar__nav" id="sidebar">
        <div class="sidebar-header">
          <div class="user-pic" style="color: bisque;">
            <i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>
          </div>
          <div class="user-info">
            <span class="user-name"><strong><?php echo $_SESSION['fullname']; ?></strong></span>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul>
            <li class="sidebar-dropdown  active-tab">
              <a href="user_profile.php"><i class="fa fa-user"></i><span>Profile</a>
            </li>
            <li class="sidebar-dropdown">
              <a href="user-feed.php"><i class="far fa-newspaper"></i><span>News Feed</span></a>
            </li>
            <li class="sidebar-dropdown">
              <a href="writeBlog.php"><i class="fa fa-file-alt"></i><span>Write a blog</span></a>
            </li>
            <li class="sidebar-dropdown">
              <a href="myblogs.php"><i class="fa fa-th-large"></i><span>MY Blogs</span></a>
            </li>
            <!-- Maps -->
            <li class="sidebar-dropdown">
              <a href="applications.php"><i class="fa fa-thumbtack"></i><span>Application Tracking</span></a>
            </li>
            <li class="sidebar-dropdown"><a href="logout.php"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
          </ul>
        </div>
      </nav>
  </div>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
  function openForm1() {
    document.getElementById("myForm1").style.display = "block";
  }
  function openForm2() {
    document.getElementById("myForm2").style.display = "block";
  }
  function openForm3() {
    document.getElementById("myForm3").style.display = "block";
  }
  function openForm4() {
    document.getElementById("myForm4").style.display = "block";
  }
  function closeForm() {
    document.getElementById("myForm1").style.display = "none";
    document.getElementById("myForm2").style.display = "none";
    document.getElementById("myForm3").style.display = "none";
    document.getElementById("myForm4").style.display = "none";
  }
</script>
<script>
     
    $('.extra-fields-customer1').click(function() {
      $('.customer_records1').clone().appendTo('.customer_records_dynamic1');
      $('.customer_records_dynamic1 .customer_records1').addClass('single1 remove1');
      $('.single1 .extra-fields-customer1').remove();
      $('.single1').append('<a href="#" class="remove-field1 btn-remove-customer1">Remove</a>');
      $('.customer_records_dynamic1 > .single1').attr("class", "remove");

      $('.customer_records_dynamic input1').each(function() {
        var count = 0;
        var fieldname = $(this).attr("name");
        $(this).attr('name', fieldname + count);
        count++;
      });

    });

    $(document).on('click', '.remove-field1', function(e) {
      $(this).parent('.remove').remove();
      e.preventDefault();      
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
  <script src="assets/js/profile-skill.js"></script>
  <script  src="assets/js/profile-cities.js"></script>
</body>
</html>
