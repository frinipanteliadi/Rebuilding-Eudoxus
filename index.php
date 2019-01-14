<!DOCTYPE html>
<html>
  <head>
  <title>Εύδοξος - Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων</title>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- Carousel -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="/sdi1400301/css/custom.css"/>
</head>
<body style="background-color: #ececec;">


<!-- Navigation Bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid"">
    <div class="navbar-header">
      <a class="navbar-brand" href="/sdi1400301/index.php">
        <img src="/sdi1400301/img/header.jpg" alt="Eudoxus logo" style="max-height:25px;">
      </a>
    </div>   
    <ul class="nav navbar-nav">
      <li class="active tab"><a href="/sdi1400301/index.php">Αρχική</a></li>
      <li class="tab"><a href="/sdi1400301/student/student.php">Φοιτητές</a></li>
      <li class="tab"><a href="#">Γραμματείες Τμημάτων</a></li>
      <li class="tab"><a href="#">Εκδότες</a></li>
      <li class="tab"><a href="/sdi1400301/bookshops/bookshops.php">Σημεία Διανομής</a></li>
      <li class="tab"><a href="/sdi1400301/about/about_us.php">Σχετικά με τον Εύδοξο</a></li>
      <li class="tab"><a href="/sdi1400301/user/help.php">FAQ</a></li>
      <li class="tab"><a href="#">Επικοινωνία</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php 
        session_start();

        if (array_key_exists('login', $_SESSION)) {
          if ($_SESSION['login']==1) {
            echo '<li class="tab-right"><a href="/sdi1400301/user/profile.php"><span class="glyphicon glyphicon-user"></span> Ο λογαριασμός μου</a></li><li class="tab-right"><a href="/sdi1400301/logout.php"> Αποσύνδεση</a></li>';
          }else{
            echo '<li class="tab-right"><a href="/sdi1400301/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
            <li class="tab-right"><a href="/sdi1400301/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>';
          }
        }else{
          echo '<li class="tab-right"><a href="/sdi1400301/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
          <li class="tab-right"><a href="/sdi1400301/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>';
        }
      ?>
    </ul>
     
    <form class="navbar-form navbar-right" action="/sdi1400301/user/search.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" name="search" placeholder="Αναζήτηση">
      </div>
      <button type="submit" class="btn btn-default">&#128269</button>
    </form>  
  </div>
</nav>


<!-- Carousel -->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="/sdi1400301/img/books1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Δεν υπάρχει πιο πιστός φίλος από ένα βιβλίο</h3>
          <p>Έρνεστ Χέμινγουεϊ</p>
        </div>
      </div>

      <div class="item">
        <img src="/sdi1400301/img/books2.jpeg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Συγγράμματα για Φοιτητές</h3>
          <p>που φοιτούν σε Α.Ε.Ι., Τ.Ε.Ι., Α.Ε.Α. και Ε.Α.Π.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/sdi1400301/img/books3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Το διάβασμα είναι όπως η τροφή και το νερό. Το πνεύμα που δεν διαβάζει χάνει βάρος, όπως ένα σώμα που δεν τρώει.</h3>
          <p>Βίκτωρ Ουγκώ</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



</body>
<script type="text/javascript">
  $(document).ready(function(){
        $('.carousel').carousel();
      });
</script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</html>
