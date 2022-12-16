<head>
  <title>readingstarsindia</title>
<link rel="stylesheet" type="text/css" href="css/new.css">
</head>
<?php
 include 'html/header.html';
 include 'html/myhead.html';
 ?>
<body>

<!-- Navbar-->
<br/>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index">ReadingStars</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a id="nav" href="aboutUs" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >About Us</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="ourStory">Our Story</a>
          <a class="dropdown-item" href="ourReach">Our Reach</a>
          <a class="dropdown-item" href="ourTeam">Our Team</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a id="nav" class="nav-link dropdown-toggle" data-toggle="dropdown" href="projects" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="raisingReaders">Raising Readers</a>
          <a class="dropdown-item" href="creatingLibraries">Creating Libraries</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Book Recommendations</a>
      </li>
      <li class="nav-item dropdown">
        <a id="nav" class="nav-link dropdown-toggle" data-toggle="dropdown" href="mediaAndEvents" role="button" aria-haspopup="true" aria-expanded="false">Media & Projects</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="events">Events</a>
          <a class="dropdown-item" href="news">News</a>
          <a class="dropdown-item" href="gallery">Gallery</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a id="nav" class="nav-link dropdown-toggle" data-toggle="dropdown" href="getInTouch" role="button" aria-haspopup="true" aria-expanded="false">Get In Touch</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="donate">Donate</a>
          <a class="dropdown-item" href="volunteer">Volunteer</a>
          <a class="dropdown-item" href="contactUs">Contact Us</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

  <!-- mission--> 
 <!--  <div class="row">
    <div class="container">
    <div class="column_b">
  <div class="card text-white bg-primary mb-3">
  <div class="card-body">
    <h4 class="card-title">OUR MISSION</h4>
    <p class="card-text">Reading Stars India believes every child has a right to read a storybook and works to make it possible!</p>
  </div>
</div>
</div>
</div>
</div> -->
<!--   <blockquote class="blockquote text-center">
    <h1 class="display-3">Our Mission</h1>
  <p class="mission">Reading Stars India believes every child has a right to read a storybook and works to make it possible!</p>
</blockquote>
<br/> -->
  <!-- /mission -->


<br/>
 <?php
include 'html/ourReach.html';
?>

<hr/>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-3"> New : We have started a book club and a youtube channel!</h1><br/>
    <img src="./pics/img/book_club.jpeg" id="club">  
  </div>
</div>
</div>
<br/><br/><hr/><br/><br/>

<?php
include 'html/slides.html'; 
include 'html/sidepanel.html';
include 'html/topbutton.html';  ?>


<h1 class="display-3">Our Programs</h1>
<br/>

<?php
include 'html/raisingReaders.html';?>
<hr/>
<?php
include 'html/ourTeam.html';?>
<br/><br/>
<?php
include 'html/footer.html'; ?>
</body>

