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
	          			if ($_SESSION['login']==1 and $_SESSION['type']==1) {
	            			echo '<li class="tab-right"><a href="/sdi1400301/user/profile.php"><span class="glyphicon glyphicon-user"></span> Ο λογαριασμός μου</a></li><li class="tab-right"><a href="/sdi1400301/logout.php"> Αποσύνδεση</a></li>';
	          			}else{
                            header("location:../user/login.php");
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


	<!-- Terms and Conditions -->
	<div class="form-group">
    	<label class="col-xs-12 control-label" style="text-align: center; color: white; font-size: 30px;">Όροι και Προϋποθέσεις</label>
		<div class="col-xs-12">
        	<div style="border: 3px solid white; height: 400px; overflow: auto; padding: 10px; background-color: white;">
            	<p><b>Όροι και Προϋποθέσεις Συμμετοχής στο Πρόγραμμα ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+</b></p>
            	
            	<p>1. Η Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών Συγγραμμάτων
				ΕΥΔΟΞΟΣ παρέχεται από το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την
				υποστήριξη του Εθνικού Δικτύου Έρευνας και Τεχνολογίας ΑΕ (εφεξής ΕΔΕΤ Α.Ε.).
				Αντικείμενο και σκοπός της υπηρεσίας είναι η ορθολογική διαχείριση της επιλογής και
				διανομής συγγραμμάτων για τους φοιτητές της Τριτοβάθμιας Εκπαίδευσης. Κάθε
				συμμετέχων φοιτητής οφείλει να διαβάσει προσεκτικά τους παρόντες όρους και
				προϋποθέσεις συμμετοχής πριν από την συμμετοχή του στο πρόγραμμα «ΕΥΔΟΞΟΣ –
				Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων». Η συμμετοχή του
				στο πρόγραμμα συνεπάγεται την αυτόματη αποδοχή των παρόντων όρων συμμετοχής.</p>
            	
            	<p>2. Ο συμμετέχων φοιτητής στο πρόγραμμα «ΕΥΔΟΞΟΣ – Ηλεκτρονική Υπηρεσία
				Ολοκληρωμένης Διαχείρισης Συγγραμμάτων» αποδέχεται ότι τα στοιχεία που δηλώνει
				στο πρόγραμμα είναι αληθή και επίκαιρα και ότι κάθε δήλωσή του στο πρόγραμμα
				επέχει θέση Υπεύθυνης Δήλωσης κατά την έννοια και με τις συνέπειες του ν.1599/1986.</p>
            	
            	<p>3. Ο συμμετέχων φοιτητής δηλώνει ότι τα Συγγράμματα που επιλέγει και παραλαμβάνει
				μέσω του προγράμματος, αντιστοιχούν στα μαθήματα τα οποία έχει δηλώσει κατά την
				εγγραφή του και νομίμως παρακολουθεί στο ακαδημαϊκό του Τμήμα κατά το τρέχον
				εξάμηνο και για τα οποία διατηρεί το δικαίωμα της παραλαβής των αντίστοιχων
				Συγγραμμάτων.</p>
            	
            	<p>4. Όλοι οι προπτυχιακοί φοιτητές των Α.Ε.Ι. δικαιούνται να επιλέγουν και να
				προμηθεύονται δωρεάν αριθμό διδακτικών συγγραμμάτων ίσο με τον συνολικό αριθμό
				των υποχρεωτικών και επιλεγόμενων μαθημάτων που απαιτούνται για τη λήψη του
				πτυχίου. Εάν προπτυχιακοί φοιτητές επιλέξουν περισσότερα επιλεγόμενα μαθήματα
				από όσα απαιτούνται για τη λήψη του πτυχίου, το δικαίωμα επιλογής και δωρεάν
				προμήθειας διδακτικών συγγραμμάτων δεν επεκτείνεται και στα επιπλέον μαθήματα
				που αυτοί επέλεξαν και εξετάστηκαν, ακόμη και αν αυτά υπολογίζονται για τη λήψη
				του πτυχίου.</p>
            	
            	<p>5. Κάθε συμμετέχων φοιτητής που λαμβάνει ένα Σύγγραμμα για ένα μάθημα που
				δικαιούται δεν μπορεί να λάβει το ίδιο Σύγγραμμα για άλλο μάθημα στο οποίο έχει
				οριστεί το ίδιο Σύγγραμμα.</p>
            	
            	<p>6. Στην περίπτωση που ένας εκδότης δεν έχει σημείο παράδοσης Συγγραμμάτων στην
				πόλη όπου σπουδάζει ο συμμετέχων φοιτητής, το Σύγγραμμα θα παραδίδεται
				υποχρεωτικά μέσω υπηρεσίας ταχυμεταφοράς, στην πόλη του φοιτητή και σε σημείο
				παρουσίας της εταιρείας ταχυμεταφοράς, που θα επιλέγεται από τον ίδιο. Σε
				περίπτωση που ο φοιτητής αμελήσει να παραλάβει το Σύγγραμμα αυτό, χάνει το
				δικαίωμα για το συγκεκριμένο Σύγγραμμα.</p>

				<p>7. Η συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα του συμμετέχοντα
				φοιτητή υπόκειται στους όρους του παρόντος καθώς και στις σχετικές διατάξεις του ν.
				2472/97 για την προστασία του ατόμου από την επεξεργασία δεδομένων προσωπικού
				χαρακτήρα, όπως ισχύει. Τα δεδομένα συλλέγονται για τους σκοπούς της παροχής της
				υπηρεσίας, για την επικοινωνία με τους συμμετέχοντες φοιτητές και την ενημέρωσή
				τους για ζητήματα που σχετίζονται με την υπηρεσία αυτή, και στο πλαίσιο αυτού του 
				σκοπού ανακοινώνονται στα οικεία Ιδρύματα Τριτοβάθμιας Εκπαίδευσης. Με την
				παροχή της συγκατάθεσης στο παρόν, ο φοιτητής παρέχει και τη συγκατάθεσή του για
				τη συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα που τον αφορούν
				κατά τα οριζόμενα στο ν. 2472/97. Η ΕΔΕΤ Α.Ε. τηρεί το απόρρητο των δεδομένων
				προσωπικού χαρακτήρα που συλλέγει και επεξεργάζεται για λογαριασμό του
				Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων και δεν διαβιβάζει τα δεδομένα σε
				τρίτους με εξαίρεση τα προβλεπόμενα στο παρόν. H ΕΔΕΤ Α.Ε. λαμβάνει τα κατάλληλα
				οργανωτικά και τεχνικά μέτρα για την ασφάλεια των δεδομένων και την προστασία
				τους από τυχαία ή αθέμιτη καταστροφή, τυχαία απώλεια, αλλοίωση, απαγορευμένη
				διάδοση ή πρόσβαση και κάθε άλλη μορφή αθέμιτης επεξεργασίας. Έχετε δικαίωμα να
				πληροφορείστε ή να λαμβάνετε ενημέρωση σχετικά με τα προσωπικά δεδομένα σας
				που τηρούμε. Αν επιθυμείτε πληροφορίες σχετικά με τα προσωπικά σας στοιχεία και τη
				χρήση τους ή θέλετε να διορθωθούν, παρακαλούμε απευθυνθείτε στο Γραφείο Αρωγής
				Χρηστών στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο <a href="http://sdi1400301.gr/OnlineReport.aspx">http://sdi1400301.gr/OnlineReport.aspx</a></p>
        		
        		<p>8. Το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την υποστήριξη της ΕΔΕΤ Α.Ε.
				προσφέρει στους φοιτητές των Α.Ε.Ι. την υπηρεσία ΕΥΔΟΞΟΣ+, η οποία είναι διακριτή
				από την Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών
				Συγγραμμάτων ΕΥΔΟΞΟΣ. Η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων
				προσφέρει τον ηλεκτρονικό χώρο συνάντησης των φοιτητών των Α.Ε.Ι. που επιθυμούν
				να ανταλλάξουν μεταξύ τους συγγράμματα.</p>

				<p>9. Στόχος της υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η ενίσχυση της περιβαλλοντικής συνείδησης των
				μελών της Ελληνικής ακαδημαϊκής κοινότητας, μέσω της αξιοποίησης
				χρησιμοποιημένων έντυπων συγγραμμάτων που ανήκουν σε φοιτητές, οι οποίοι
				επιθυμούν να τα ανταλλάξουν δωρεάν με άλλους φοιτητές.</p>

				<p>10. Η χρήση της υπηρεσίας ΕΥΔΟΞΟΣ+ από τους φοιτητές είναι καθαρά προαιρετική. Σε
				περίπτωση που οι φοιτητές δεν συμφωνούν με κάποιον από τους παρόντες όρους
				χρήσης, καλούνται να εγκαταλείψουν την ιστοσελίδα άμεσα και να μην κάνουν χρήση
				της υπηρεσίας. Η υπηρεσία ΕΥΔΟΞΟΣ+ προσφέρεται δωρεάν σε όλους φοιτητές των
				Α.Ε.Ι. Σε καμία περίπτωση η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων δεν
				συνεπάγεται την καταβολή οποιουδήποτε αντιτίμου. Προϋπόθεση χρήσης της
				υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η αποδοχή ότι αυτή προσφέρεται μόνο για την ανταλλαγήδωρεάν συγγραμμάτων χωρίς αντίτιμο.</p>

				<p>11. Οι χρήστες που επιθυμούν, μπορούν να δωρίζουν τα συγγράμματα με αποκλειστικά
				δική τους ευθύνη, εφόσον και στο μέτρο που έχουν το νόμιμο δικαίωμα να
				προχωρήσουν στην δωρεά, γεγονός που δεν εγγυάται η υπηρεσία ΕΥΔΟΞΟΣ+ και για το
				οποίο δεν φέρει καμία ευθύνη. Απαγορεύεται ρητά στους χρήστες της υπηρεσίας η
				πώληση ή η μίσθωση των βιβλίων ή το χρησιδάνειο αυτών ή η κάθε είδους
				εκμετάλλευση των δικαιωμάτων που συνδέονται με τα συγγράμματα ή η καταβολήαποδοχή οποιουδήποτε αντιτίμου με ή με αφορμή την παράδοση των
				ανταλλασσόμενων συγγραμμάτων.</p>

				<p>12. Ο διαχειριστής της υπηρεσίας δεν φέρει καμία ευθύνη έναντι των χρηστών ή έναντι
				κάθε τρίτου (νομικού ή φυσικού προσώπου) για τυχόν συμπεριφορά των χρηστών
				διαφορετική από αυτή για την οποία προσφέρεται η υπηρεσία, δηλαδή για την ανταλλαγή χρησιμοποιημένων συγγραμμάτων κυριότητας των χρηστών. Οι χρήστες φέρουν την αποκλειστική ευθύνη πρόσβασης στην υπηρεσία ΕΥΔΟΞΟΣ+ και είναι οι
				μόνοι και οι αποκλειστικοί υπεύθυνοι να αποκαταστήσουν πλήρως κάθε ζημία που θα
				υποστεί η υπηρεσία ΕΥΔΟΞΟΣ+, οι συνεργάτες της ή / και οποιοδήποτε τρίτο πρόσωπο
				εξαιτίας οποιασδήποτε αμφισβήτησης / διαφοράς / διαμάχης που τυχόν προκύψει και
				θα οφείλεται στη μη συμμόρφωση των χρηστών ή εξουσιοδοτούμενων από αυτούς
				προσώπων με τους όρους του παρόντος.</p>

				<p>13. Σε περίπτωση χρήσης των υπηρεσιών της υπηρεσίας ΕΥΔΟΞΟΣ+ με τρόπο που
				αντιβαίνει τους παρόντες όρους του, οι διαχειριστές της διατηρούν το δικαίωμα
				αποκλεισμού χωρίς προειδοποίηση του μη συμμορφούμενου χρήστη από τις υπηρεσίες
				του ΕΥΔΟΞΟΣ+. Το περιεχόμενο και οι πληροφορίες που περιλαμβάνονται στο
				ΕΥΔΟΞΟΣ+ δεν θα πρέπει σε καμιά περίπτωση να θεωρούνται ως συμβουλές ή ως
				παραίνεση για συγκεκριμένη ενέργεια.</p>

				<p>14. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν παρέχουν καμία ρητή εγγύηση, ότι τα
				ανταλλασσόμενα συγγράμματα θα παραδίδονται κατάλληλα, δίχως πραγματικά ή
				νομικά ελαττώματα. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν φέρουν
				οποιαδήποτε ευθύνη σε περίπτωση ανταλλαγής συγγραμμάτων με πραγματικά ή
				νομικά ελαττώματα.</p>

				<p>15. Η υπηρεσία ΕΥΔΟΞΟΣ+ ενδέχεται να συνεργάζεται με άλλους φορείς ή νομικά πρόσωπα
				για τη διενέργεια κληρώσεων και διαγωνισμών. Η ευθύνη για την αρτιότητα, ακρίβεια,
				πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του περιεχομένου αυτού που
				δημοσιεύεται στις σελίδες του ΕΥΔΟΞΟΣ+ ανήκει αποκλειστικά στους φορείς που
				διενεργούν την κλήρωση ή το διαγωνισμό και παρέχουν τα δώρα στους φοιτητές. Καμία
				ευθύνη δεν φέρει ο διαχειριστής της υπηρεσία ΕΥΔΟΞΟΣ+ για την αρτιότητα, ακρίβεια,
				πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του διαγωνισμού ή της κλήρωσης
				και της διανομής των δώρων.</p>

				<p>16. Απαγορεύεται στους χρήστες να χρησιμοποιούν τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+
				για τη διακίνηση δεδομένων που εμπεριέχουν ή συνεπάγονται:</p>

				<ul>
					<li>ψευδή δήλωση για την ταυτότητα του χρήστη / μέλους ή παραπλανητική δήλωση
					αναφορικά με τη σχέση ή / και συνεργασία του χρήστη / μέλους με κάποιο άλλο
					νομικό ή φυσικό πρόσωπο.</li>
					<li>παραχάραξη ή άλλη αλλοίωση των αναγνωριστικών των χρηστών / μελών με σκοπό
					την παραπλάνηση ως προς την προέλευση του περιεχομένου που μεταδίδεται
					μέσω των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+.</li>
					<li>διαφημιστικά μηνύματα ή άλλου περιεχομένου προώθησης προϊόντων ή
					υπηρεσιών ή τρίτων δικτυακών τόπων, την αποστολή ανεπιθύμητων και μη
					προσκαλούμενων από τον λήπτη ηλεκτρονικών μηνυμάτων και οποιαδήποτε άλλη
					μορφή ανεπιθύμητης προώθησης περιεχομένου.</li>
					<li>ιούς ή οποιοδήποτε άλλο ηλεκτρονικό κώδικα, αρχεία ή προγράμματα σχεδιασμένα
					να παρεμβληθούν, καταστρέψουν ή περιορίσουν τη λειτουργία οποιουδήποτε λογισμικού ή εξοπλισμού ηλεκτρονικών υπολογιστών ή τηλεπικοινωνιακού δικτύου
					ή εξοπλισμού.</li>
					<li>παρεμβολή στις υπηρεσίες ή διάσπαση των υπηρεσιών ή των servers ή των δικτύων
					που είναι συνδεδεμένα με τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ ή μη
					συμμόρφωση με τους κανόνες, τις προϋποθέσεις, τις διαδικασίες και τους κανόνες
					των δικτύων αυτών.</li>
					<li>παραβίαση, με ή χωρίς πρόθεση, οποιασδήποτε τοπικής, εθνικής, ευρωπαϊκής,
					διεθνούς νομοθεσίας ή / και οποιουδήποτε κανόνα που έχει νομοθετική ισχύ και
					αφορά ή / και καλύπτει οποιαδήποτε υπηρεσία ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+.</li>
					<li>παρενόχληση με οποιονδήποτε τρόπο της ιδιωτικής ζωής και των ατομικών και
					κοινωνικών δικαιωμάτων άλλων χρηστών / μελών αλλά και κάθε ατόμου.</li>
				</ul>

				<p>17. Για κάθε απορία τους, οι χρήστες των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ μπορούν να
				απευθύνονται στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο <a href="http://sdi1400301.gr/OnlineReport.aspx">http://sdi1400301.gr/OnlineReport.aspx</a>. Σε κάθε περίπτωση η ΕΔΕΤ Α.Ε. διατηρεί το
				δικαίωμα τροποποίησης των παρόντων όρων και προϋποθέσεων κατόπιν ενημέρωσης
				των συμμετεχόντων φοιτητών μέσω της παρούσας ιστοσελίδας. Για τον λόγο αυτό οι
				συμμετέχοντες φοιτητές οφείλουν να επισκέπτονται τακτικά την ιστοσελίδα του έργου
				και να ελέγχουν τους όρους και τις προϋποθέσεις συμμετοχής.</p>
        	</div>
    	</div>
    </div>

    <div class="wrapper" style="text-align: center;">
    	
    	<a href="/sdi1400301/student/form.php">
    	<button class="btn btn-success" style="top: 50%; margin-top: 50px;">Συνέχεια</button>
    	</a>
    	<a href="/sdi1400301/index.php">
  			<button class="btn btn-danger" style="top: 50%; margin-top: 50px;"	>Ακύρωση</button>
		</a>
    </div>

    <p align="center"><b>Σημείωση:</b> Πατώντας "Συνέχεια" συμφωνείτε στους Όρους και Προϋποθέσεις.</p>


</body>
</html>