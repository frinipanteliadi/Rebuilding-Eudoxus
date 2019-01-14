<!DOCTYPE html>
<html>
<head>
  <title>Εύδοξος - Βοήθεια</title>

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/sdi1400301/css/custom.css"/>
    <link rel="stylesheet" href="/sdi1400301/css/help.css"/>



</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid"">
      <div class="navbar-header">
        <a class="navbar-brand" href="/sdi1400301/index.php">
          <img src="/sdi1400301/img/header.jpg" alt="Eudoxus logo" style="max-height:25px;">
        </a>
      </div>   
      <ul class="nav navbar-nav">
        <li class="tab"><a href="/sdi1400301/index.php">Αρχική</a></li>
        <li class="tab"><a href="/sdi1400301/student/student.php">Φοιτητές</a></li>
        <li class="tab"><a href="#">Γραμματείες Τμημάτων</a></li>
        <li class="tab"><a href="#">Εκδότες</a></li>
        <li class="tab"><a href="/sdi1400301/bookshops/bookshops.php">Σημεία Διανομής</a></li>
        <li class="tab"><a href="/sdi1400301/about/about_us.php">Σχετικά με τον Εύδοξο</a></li>
        <li class="active tab"><a href="/sdi1400301/user/help.php">FAQ</a></li>
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


  <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px">Πώς μπορούμε να βοηθήσουμε;</h1>
        <p>Χρήσιμες συμβουλές & οδηγίες</p>
      </div>
  </div>


  <div class="bs-example">
    <div class="panel-group" id="accordion">
      
      <!-- Box no. 1 -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Ποιοι μπορούν να κάνουν δήλωση συγγραμμάτων;</a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            <p>Όλοι οι προπτυχιακοί φοιτητές των Πανεπιστημίων (Α.Ε.Ι.), των Τεχνολογικών Εκπαιδευτικών Ιδρυμάτων (Τ.Ε.Ι.) και των Ανώτατων Εκκλησιαστικών Ακαδημιών (Α.Ε.Α.) της επικράτειας καθώς και του Ελληνικού Ανοιχτού Πανεπιστημίου (Ε.Α.Π.).</p>
          </div>
        </div>
      </div>
      
      <!-- Box no.2 -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Πότε είναι η έναρξη δηλώσεων συγγραμμάτων για το τρέχον εξάμηνο;</a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Οι δηλώσεις διδακτικών συγγραμμάτων για το χειμερινό εξάμηνο του ακαδημαϊκού έτους 2018-2019 θα ξεκινήσουν την Τετάρτη 24 Οκτωβρίου 2018 και θα πρέπει να έχουν ολοκληρωθεί έως την Παρασκευή 21 Δεκεμβρίου 2018.</p>
          </div>
        </div>
      </div>
      
      <!-- Box no.3 -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Ποιοι μπορούν να γίνουν μέλη της υπηρεσίας;</a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Όλοι! Η ηλεκτρονική υπηρεσία "ΕΥΔΟΞΟΣ" δεν απευθύνεται μονάχα σε φοιτητές, αλλά σε όλους όσους επιθυμούν να αποκτήσουν πρόσβαση στα δωρεάν συγγράμματα και σημειώσεις που διαθέτει.</p>
          </div>
        </div>
      </div>
      
      <!-- Box no.4 -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. Πώς μπορώ να εγγραφώ στην υπηρεσία;</a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Η εγγραφή στην υπηρεσία γίνεται έυκολα, γρήγορα και αυτόματα με τη συμπλήρωση μίας <a href="/sdi1400301/user/user_register.php">φόρμας.</a></p>
          </div>
        </div>
      </div>

      <!-- Box no.5 -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">5. Πού βρίσκονται τα συνεργαζόμενα σημεία διανομής;</a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Μπορείτε να βρείτε όλα τα συνεργαζόμενα καταστήματα/σημεία διανομής στον παρακάτω <a href="#">σύνδεσμο</a>.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>