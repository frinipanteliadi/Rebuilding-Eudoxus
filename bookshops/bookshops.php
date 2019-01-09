<!DOCTYPE html>
<html>
<head>
	<title>Εύδοξος - Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων</title>
  	
  	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="/Eudoxus/css/custom.css"/>
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
	  			<li class="tab"><a href="/Eudoxus/student/student.php">Φοιτητές</a></li>
	  			<li class="tab"><a href="#">Γραμματείες Τμημάτων</a></li>
	  			<li class="tab"><a href="#">Εκδότες</a></li>
	  			<li class="active tab"><a href="/Eudoxus/bookshops/bookshops.php">Σημεία Διανομής</a></li>
	  			<li class="tab"><a href="#">Σχετικά με τον Εύδοξο</a></li>
	  			<li class="tab"><a href="#">Επικοινωνία</a></li>
	    	</ul>
	    	<ul class="nav navbar-nav navbar-right">
	      		<li class="tab-right"><a href="#"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
	      		<li class="tab-right"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
	    	</ul>
	     
	    	<form class="navbar-form navbar-right" action="/action_page.php">
	      		<div class="form-group">
	        		<input type="text" class="form-control" placeholder="Αναζήτηση">
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
                    	<a class="c-fi-link ga-event" data-event-action="Feature Hero Image Click" href="/ika/user/profile.php" style="background-image:url(/Eudoxus/img/bookcase.jpg)">
                        	<div class="c-fi-text">Παράδοση Συγγραμμάτων</div>
                    	</a>
                	</div>
                	<div class="c-fi-cell">
                    	<div class="c-fi-grid nested">
                        	<div class="c-fi-cell">
                            	<a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/ika/pension/pension.php/" style="background-image:url(/Eudoxus/img/report.jpg)">
                                	<div class="c-fi-text">Αναφορά Διανομών</div>
                            	</a>
                        	</div>
                        	<div class="c-fi-cell">
                            	<a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/ika/work/business.php/" style="background-image:url(/Eudoxus/img/store_front.jpg)">
                                	<div class="c-fi-text">Συνεργαζόμενα Καταστήματα</div>
                            	</a>
                        	</div>
                        	<div class="c-fi-cell">
                            	<a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="#" style="background-image:url(/Eudoxus/img/help.jpg)">
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