<?php
    require_once '../login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
?>
<html>
<head>
	<title>Εύδοξος - Διαθέσιμα Συγγράμματα</title>

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
	      <li class="tab"><a href="/sdi1400301/bookshops/bookshops.php">Σημεία Διανομής</a></li>
	      <li class="tab active"><a href="/sdi1400301/about/about_us.php">Σχετικά με τον Εύδοξο</a></li>
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

	<h1 style="text-align: center; color: white; font-family: Verdana;">Διαθέσιμα Συγγράμματα</h1>
    <div class="container" style="background-color: white;">
        <?php
            $query = "SELECT * FROM Book";
            $result = $conn -> query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Συγγραφέας: ".$row['author']."</p>
                            <p>Εκδότης: ".$row['publication']."</p>
                            <p>Εξάμηνο: ".$row['semester']."</p>
                            </div>";
            }
        ?>
    </div>

</body>
</html>