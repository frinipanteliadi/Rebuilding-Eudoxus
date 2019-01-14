<!DOCTYPE html>
<html lang="en">
<?php  
  session_start();
    // if(!array_key_exists('login', $_SESSION)){
    //   $_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
    //   header("location:login.php");
    //   die();
    // }
    // if($_SESSION['login']!=1){
    //   $_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
    //   header("location:login.php");
    //   die();
    // }
    // $_SESSION['message_register']='';
    require_once '../login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
    mysqli_set_charset($conn,'utf8');
?>

<html lang="en">
<head>
  
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Εύδοξος - Αποτελέσματα Αναζήτησης</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/sdi1400301/css/login.css"/>

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
        <li class="tab"><a href="/sdi1400301/about/about_us.php">Σχετικά με τον Εύδοξο</a></li>
        <li class="tab"><a href="/sdi1400301/user/help.php">FAQ</a></li>
        <li class="tab"><a href="#">Επικοινωνία</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
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
  
  <h1 style="text-align: center; color: white; font-family: Verdana;">Αποτελέσματα Αναζήτησης</h1>
  <div class="container" style="background-color: white;">
    <?php
      
      if(isset($_POST['search'])){
        $total_results = 0;
        $search_request = $_POST['search'];
        
        // Searching the 'Book' table
        $book_results = 0;
        $query = "SELECT * FROM Book WHERE CONCAT(name,author,publication) LIKE '%".$search_request."%'";
        $result = $conn -> query($query);
        echo "<h2>Αποτελέσματα Συγγραμμάτων</h2>";
        if (!empty($result)) {
          while ($row = $result->fetch_assoc()) {
            echo "<div class=\"container\" style=\"background-color: #E0E0E0; width: 1000px;\">
            <h3>".$row['name']."</h3>
            <p>Συγγραφέας: ".$row['author']."</p>
            <p>Εκδότης: ".$row['publication']."</p>
            <p>Εξάμηνο: ".$row['semester']."</p>
            </div>";

            $book_results = $book_results + 1;
          }
        }
        echo "<br><p style=\"text-indent: 70px;\"><strong>Βρέθηκαν: ".$book_results." Αποτελέσμα/-τα</strong></p>";
        echo "<br>";
        
        // Searching the 'Bookstore' table
        $bookstore_results = 0;
        $query2 = "SELECT * FROM Bookstore WHERE CONCAT(name,street) LIKE '%".$search_request."%'";
        $result2 = $conn -> query($query2);
        echo "<h2>Αποτελέσματα Σημείων Διανομής</h2>";
        if (!empty($result2)) {
          while ($row2 = $result2->fetch_assoc()) {
            echo "<div class=\"container\" style=\"background-color: #E0E0E0; width: 1000px;\">
            <h3>".$row2['name']."</h3>
            <p>Διεύθυνση: ".$row2['author']."</p>
            </div>";

            $bookstore_results = $bookstore_results + 1;
          }
        }
        echo "<br><p style=\"text-indent: 70px;\"><strong>Βρέθηκαν: ".$bookstore_results." Αποτελέσμα/-τα</strong></p>";
        echo "<br>";
        
        // Searching the 'User' table
        $user_results = 0;
        $query3 = "SELECT * FROM User WHERE CONCAT(name,surname) LIKE '%".$search_request."%'";
        $result3 = $conn -> query($query3);
        echo "<h2>Αποτελέσματα Χρηστών</h2>";
        if (!empty(($result3))) {
          while ($row3 = $result3->fetch_assoc()) {
            if ($row3['type']==1) {
              echo "<div class=\"container\" style=\"background-color: #E0E0E0; width: 1000px;\">
              <h3>".$row3['name']." ".$row3['surname']."</h3>
              <p>Ιδιότητα: Φοιτητής</p>
              </div>";
            }
            elseif ($row3['type']==2) {
              echo "<div class=\"container\" style=\"background-color: #E0E0E0; width: 1000px;\">
              <h3>".$row3['name']." ".$row3['surname']."</h3>
              <p>Ιδιότητα: Διανεμητής</p>
              </div>";
            }

            $user_results = $user_results + 1;
           }
        }
        echo "<br><p style=\"text-indent: 70px;\"><strong>Βρέθηκαν: ".$user_results." Αποτελέσμα/-τα</strong></p>";
        echo "<br>";

        $total_results = $book_results + $bookstore_results + $user_results;
        echo "<p><strong>Συνολικά βρέθηκαν: ".$total_results." Αποτέλεσμα/-τα</strong></p>";
        
        // $search=mysqli_real_escape_string($conn,$_POST['search']);
        // $sql= "SELECT * FROM Book as type WHERE name LIKE '%$search%' OR subject LIKE '%$search%' OR author LIKE '%$search%' OR publication LIKE '%$search%'";
        // $result = mysqli_query($conn,$sql);
        // $queryResult = mysqli_num_rows($result);

        // $query= "SELECT * FROM Bookstore  WHERE name LIKE '%$search%' OR street LIKE '%$search%'";
        // $res = mysqli_query($conn,$query);
        // $num = mysqli_num_rows($res);
        // $sum = $num + $queryResult;

        // echo "Υπάρχουν ".$sum." results!";

        // if ($sum > 0){
        //     echo " <div class=\"row\">
        //             <div class=\"col-md-6\">
        //             <h3>Aποτελέσματα Αναζήτησης</h3>
        //             <div class=\"well\">
        //              ";
        //   if ($queryResult>0){
        //     while ( $row = mysqli_fetch_assoc($result)){

        //       echo "<h3><strong>Αποτελέσματα Βιβλίων</strong></h3>
        //             <p><strong>Όνομα Βιβλίου:</strong>".$row['name']." &nbsp
        //             <strong>Μάθημα:</strong>".$row['subject']." &nbsp  
        //             <strong>Συγγραφέας:</strong>".$row['author']."  &nbsp 
        //             <strong>Εκδόσεις:</strong>".$row['publication']."</p>";
        //     }
        //   }
        //   if ($num>0){

        //      while ( $row = mysqli_fetch_assoc($res)){

        //       echo "<h3><strong>Αποτελέσματα Βιβλιοπωλείων</strong></h3>
        //             <p><strong>Όνομα Βιβλιοπωλείου:</strong>".$row['name']." &nbsp
        //             <strong>Οδός:</strong>".$row['street']." </p>";  
        //     }
        //   }
        //   echo "</div>
        //         </div>
        //         </div>";
            


        
        // }
      }
    ?>
  </div>
</body>
</html>