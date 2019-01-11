<!DOCTYPE html>
<html>
<head>
	<title>Εύδοξος - Βοήθεια</title>

	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="/Eudoxus/css/custom.css"/>
	  <link rel="stylesheet" href="/Eudoxus/css/help.css"/>



</head>
<body>

	<!-- Navigation Bar -->
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid"">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="/Eudoxus/index.php">
        			<img src="/Eudoxus/img/header.jpg" alt="Eudoxus logo" style="max-height:25px;">
      			</a>
    		</div>   
    		<ul class="nav navbar-nav">
		     	<li class="tab"><a href="/Eudoxus/index.php">Αρχική</a></li>
		    	<li class="active tab"><a href="/Eudoxus/student/student.php">Φοιτητές</a></li>
		      	<li class="tab"><a href="#">Γραμματείες Τμημάτων</a></li>
		      	<li class="tab"><a href="#">Εκδότες</a></li>
		      	<li class="tab"><a href="/Eudoxus/bookshops/bookshops.php">Σημεία Διανομής</a></li>
		      	<li class="tab"><a href="#">Σχετικά με τον Εύδοξο</a></li>
		      	<li class="tab"><a href="#">Επικοινωνία</a></li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right">
      			<li class="tab-right"><a href="/Eudoxus/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
      			<li class="tab-right"><a href="/Eudoxus/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
    		</ul>
     
    		<form class="navbar-form navbar-right" action="/action_page.php">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Αναζήτηση">
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


  <!-- Accordion -->
  <div class="bs-example">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Δήλωση Συγγραμμάτων</a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            <p>Lorem ipsum enim laoreet dictumst consectetur elit duis conubia, felis ligula erat malesuada in aliquet sem etiam, orci sem aliquet felis ornare fames quam adipiscing etiam iaculis fames sit iaculis.

Vulputate phasellus pharetra metus fames litora accumsan ac velit platea, tincidunt aptent leo nullam adipiscing mollis cras neque, pretium purus arcu aliquet proin quam lobortis diam odio facilisis nibh placerat condimentum maecenas curae nibh.<br><br><a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Δημιουργία Δήλωσης.</a></p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Διαδικασία Εγγραφής στην Εφαρμογή</a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Η διαδικασία εγγραφής στην υπηρεσία "ΕΥΔΟΞΟΣ" γίνεται αυτόματα με τη συμπλήρωση της κατάλληλης <a href="/Eudoxus/user/user_register.php" target="_blank">φόρμας.</a></p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Ποιοι μπορούν να κάνουν εγγραφή στην υπηρεσία "ΕΥΔΟΞΟΣ";</a>
          </h4>
        </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Όλοι! Η ηλεκτρονική υπηρεσία "ΕΥΔΟΞΟΣ" δεν απευθύνεται μόνο σε άτομα που έχουν άμεση σχέση με την Τριτοβάθμια εκπαίδευση, αλλά σε όλους όσους ενδιαφέρονται να γνωρίσουν τις υπηρεσίες που προσφέρει.</p>
            </div>
          </div>
      </div>
      </div>
  </div>

</body>
</html>