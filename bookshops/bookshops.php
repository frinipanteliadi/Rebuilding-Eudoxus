<!DOCTYPE html>
<html>
<head>
  <title>Εύδοξος - Σημεία Διανομής</title>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/sdi1400301/css/custom.css"/>
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
        <li class="tab active"><a href="/sdi1400301/bookshops/bookshops.php">Σημεία Διανομής</a></li>
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


  <!-- Options on the user's page -->
  <div class="mymenu">
      <section class="c-fi">
          <div class="c-fi-wrapper">
              <div class="c-fi-grid">
                  <div class="c-fi-cell hero">
                      <a class="c-fi-link ga-event" data-event-action="Feature Hero Image Click" href="#" style="background-image:url(/sdi1400301/img/bookcase.jpg)">
                          <div class="c-fi-text">Παράδοση Συγγραμμάτων</div>
                      </a>
                  </div>
                  <div class="c-fi-cell">
                      <div class="c-fi-grid nested">
                          <div class="c-fi-cell">
                              <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/sdi1400301/bookshops/report.php" style="background-image:url(/sdi1400301/img/report.jpg)">
                                  <div class="c-fi-text">Αναφορά Διανομών</div>
                              </a>
                          </div>
                          <div class="c-fi-cell">
                              <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="#" style="background-image:url(/sdi1400301/img/store_front.jpg)">
                                  <div class="c-fi-text">Συνεργαζόμενα Καταστήματα</div>
                              </a>
                          </div>
                          <div class="c-fi-cell">
                              <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/sdi1400301/user/help.php" style="background-image:url(/sdi1400301/img/help.jpg)">
                                  <div class="c-fi-text">Βοήθεια</div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>

</body>
</html>