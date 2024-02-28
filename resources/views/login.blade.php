<!DOCTYPE html>
<html>

<head>
    <title>Tugas 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif;
        }

        .profile-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 100%;
            border-radius: 10px;
        }

        .center-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Menggunakan tinggi 100vh agar gambar berada di tengah vertikal layar */
        }

        .skills-bar {
            margin-top: 10px;
        }

        .skills-label {
            font-weight: bold;
        }

        .progress {
            width: 100%;
            background-color: #ccc; /* Warna latar belakang bar */
            height: 30px; /* Tinggi bar */
            border-radius: 5px; /* Sudut yang lebih halus */
        }

        .progress-bar {
            text-align: center;
            line-height: 30px; /* Pusatkan teks vertikal di dalam bar */
            width: 0; /* Panjang awal bar */
            height: 100%;
            background-color: #d39bcb; /* Warna bar persentase */
            color: white; /* Warna teks */
            border-radius: 5px; /* Sudut yang lebih halus */
        }

        /* Navbar styles */
        .navbar {
            overflow: hidden;
            background-color: #ffffff;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #11ff4100;
            color: rgba(235, 235, 235, 0.816);
        }

        /* Styles for the combined header and navbar */
        .header-navbar {
            background-color: #fdfd96;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        /* Custom footer style */
        .custom-footer {
            background-color: #fdfd96;
        }

        .w3-text-custom {
            color: #d39bcb !important;
        }
        
    </style>
</head>

<body class="w3-light-grey">

    <div class="header-navbar">
        <h1><a href="homepage.html" style="text-decoration: none; color: white;">My Website</a></h1>
        <div class="navbar">
            <a href="home.html">Home</a>
            <a href="about.html">About</a>
            <a href="portofolio.html">Portofolio</a>
            <a href="contact.html">Contact</a>
        </div>
    </div>

    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
    
      <!-- The Grid -->
      <div class="w3-row-padding">
      
        <!-- Left Column -->
        <div class="w3-third">
        
          <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-display-container">
              <img src="https://i.postimg.cc/Hxp6NXFv/Whats-App-Image-2023-09-27-at-21-56-05.jpg" style="width: 100%;" alt="Avatar">
              <div class="w3-display-bottomleft w3-container w3-text-black">
              </div>
            </div>
            <div class="w3-container">
              <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-custom"></i>UI/UX Designer</p>
              <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-custom"></i>Pontianak ,Kalimantan Barat</p>
              <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-custom"></i>H1101221052@student.untan.ac.id</p>
              <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-custom"></i>082253706110</p>
              <hr>
    
              <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-custom"></i>Skills</b></p>
              <p>Adobe Photoshop</p>
              <div class="progress">
                <div class="progress-bar" style="width: 80%;">80%</div>
              </div>            
              <p>Figma</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="progress">
                  <div class="progress-bar" style="width: 90%;">90%</div>
                </div>
              </div>
              <p>Illustrator</p>
              <div class="progress">
                <div class="progress-bar" style="width: 75%;">75%</div>
              </div>
              <p>Web Programming</p>
              <div class="progress">
                <div class="progress-bar" style="width: 70%;">70%</div>
              </div>
              <br>
    
              <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-custom"></i>Languages</b></p>
              <p>English</p>
              <div class="progress">
                <div class="progress-bar" style="width: 90%;">90%</div>
              </div>
              <p>Indonesia</p>
              <div class="progress">
                <div class="progress-bar" style="width: 100%;">100%</div>
              </div>
              <p>Japanese</p>
              <div class="progress">
                <div class="progress-bar" style="width: 75%;">75%</div>
              </div>
              <br>
            </div>

            
          </div><br>
    
        <!-- End Left Column -->
        </div>
    
        <!-- Right Column -->
        <div class="w3-twothird">
        
          <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-custom"></i>Work Experience</h2>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Front End Developer</b></h5>
              <h6 class="w3-text-custom"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - Current</h6>
              <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Web Developer</b></h5>
              <h6 class="w3-text-custom"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
              <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Graphic Designer </b></h5>
              <h6 class="w3-text-custom"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
            </div>
          </div>
    
          <div class="w3-container w3-card w3-white">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-custom"></i>Education</h2>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Universitas Tanjungpura</b></h5>
              <h6 class="w3-text-custom"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
              <p>Web Development! All I need to know in one place</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Business School</b></h5>
              <h6 class="w3-text-custom"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
              <p>Master Degree</p>
              <hr>
            </div>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>School of Coding</b></h5>
              <h6 class="w3-text-custom"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
              <p>Bachelor Degree</p><br>
            </div>
          </div>
    
        <!-- End Right Column -->
        </div>
        
      <!-- End Grid -->
      </div>
      
      <!-- End Page Container -->
    </div>
    
    <footer class="w3-container custom-footer w3-center w3-margin-top">
      <p>Find me on social media.</p>
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>
    
</body>

</html>