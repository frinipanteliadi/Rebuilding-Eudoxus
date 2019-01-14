<!DOCTYPE html>
<html>
<head>
	<title>Εύδοξος - Δήλωση Συγγραμμάτων</title>

	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="/sdi1400301/css/custom.css"/>

</head>
<body>
	<?php

    require_once '../login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
    ?>
	
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
	      		<li class="active tab"><a href="/sdi1400301/student/student.php">Φοιτητές</a></li>
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
	            			echo '<li class="tab-right"><a href="/sdi1400301/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li><li class="tab-right"><a href="/sdi1400301/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>';
	          			}
	        		}else{
	          			echo '<li class="tab-right"><a href="/sdi1400301/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li><li class="tab-right"><a href="/sdi1400301/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>';
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

    <!-- Dynamic Tabs -->
    <form action="./form.php" method="post">
	<div class="container" style="background-color: white;">
  		<h2 style="color: white;">Δήλωση Συγγραμμάτων</h2>
  		<ul class="nav nav-tabs">
    		<li class="active"><a data-toggle="tab" href="#menu1">1o Εξάμηνο</a></li>
		    <li><a data-toggle="tab" href="#menu2">2ο Εξάμηνο</a></li>
		    <li><a data-toggle="tab" href="#menu3">3ο Εξάμηνο</a></li>
		    <li><a data-toggle="tab" href="#menu4">4ο Εξάμηνο</a></li>
		    <li><a data-toggle="tab" href="#menu5">5ο Εξάμηνο</a></li>
		    <li><a data-toggle="tab" href="#menu6">6ο Εξάμηνο</a></li>
		    <li><a data-toggle="tab" href="#menu7">7ο Εξάμηνο</a></li>
		    <li><a data-toggle="tab" href="#menu8">8ο Εξάμηνο</a></li>
  		</ul>

  		<div class="tab-content">
    		<div id="menu1" class="tab-pane fade in active">
                <?php

                $query = "SELECT * FROM Book where semester = 1";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>



    		</div>
    		<div id="menu2" class="tab-pane fade">
                <?php
                $query = "SELECT * FROM Book WHERE semester=2";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>
    		</div>
    		<div id="menu3" class="tab-pane fade">
                <?php
                $query = "SELECT * FROM Book WHERE semester=3";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>
    		</div>
    		<div id="menu4" class="tab-pane fade">
                <?php
                $query = "SELECT * FROM Book WHERE semester=4";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>
    		</div>
    		<div id="menu5" class="tab-pane fade">
                <?php
                $query = "SELECT * FROM Book WHERE semester=5";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>
    		</div>
    		<div id="menu6" class="tab-pane fade">
                <?php
                $query = "SELECT * FROM Book WHERE semester=6";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>
    		</div>
    		<div id="menu7" class="tab-pane fade">
                <?php
                $query = "SELECT * FROM Book WHERE semester=7";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>
    		</div>
    		<div id="menu8" class="tab-pane fade">
                <?php
                $query = "SELECT * FROM Book WHERE semester=8";
                $result = $conn -> query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<div class=\"container\">
                            <h1>".$row['name']."</h1>
                            <p>Author: ".$row['author']."</p>
                            <p>Publisher: ".$row['publication']."</p>
                            <label>Δήλωση</label>
                            <input type=\"checkbox\" name=\"check_list[]\" value=\"".$row['id']."\">
                            </div>";
                }
                ?>
    		</div>
  		</div>
	</div>
    <div style="text-align: center; margin-top: 30px;">
        <input type="submit" value="Υποβολή Δήλωσης" class="btn btn-success"/>
    </div>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST') {
        if (!empty($_POST['check_list'])) {
            foreach ($_POST['check_list'] as $check) {

                $query = "INSERT INTO Student_has_Book VALUES(".$_SESSION['id'].",".$check.")";
                $result = $conn -> query($query);
                if(!$result) echo " INSERT failed $query<br>". $conn->error;
            }
        }
        echo "<script type='text/javascript'>window.top.location='./list.php';</script>"; exit;

    }
    ?>
</body>
</html>