<!DOCTYPE html>
<?php
    session_start();
    require_once '../login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    mysqli_set_charset($conn,'utf8');
    if($conn->connect_error) die($conn->connect_error);
    mysqli_set_charset($conn,'utf8');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['message']='';
        
        // Checking if the provided email already exists
        $email = $_POST['Email'];
        $query = "SELECT * FROM Login WHERE email='$email'";
        $result = $conn -> query($query);
        if(!$result) die ($conn->error);
        if($result->num_rows!=0){
            $_SESSION['message']='Το email υπάρχει ήδη';
            header("location: user_register.php");
            die();
        }

        // Checking if the provided S.S.N already exists
        $id = $_POST['ID'];
        $query = "SELECT * FROM User WHERE id='$id'";
        $result = $conn -> query($query);
        if(!$result) die ($conn->error);
        if($result->num_rows!=0){
            $_SESSION['message']='Το Α.Φ.Μ. είναι ήδη εγγεγραμμένο';
            header("location: user_register.php");
            die();
        }

        // Checking if the provided passwords are the same
        if($_POST['Pwd']==$_POST['RePwd']){
            $username = $_POST['Username'];
            $surname = $_POST['Surname'];
            $password = $_POST['Pwd'];
            $var = 0;
            
            if (isset($_POST['type'])){
               
                // The user is a student
                if ($_POST['type'] == 4) {
                    $var = 1;
                }
                // The user is a distributor
                elseif ($_POST['type'] == 1) {
                    $var = 2;
                }
            }
            
            // Inserting the values in the database
            $query = "INSERT INTO User VALUES"."('$id','$username','$surname','$var')";
            $result = $conn -> query($query);
            if(!$result) echo " INSERT failed $query<br>". $conn->error;
            //echo "First query: $query";

            if ($var == 1) {
                $var = 1;
                $query = "INSERT INTO Student VALUES"."('','','$id')";
                $result = $conn -> query($query);
                if(!$result) echo " INSERT failed $query<br>". $conn->error;
            }

            $query ="INSERT INTO Login VALUES" . "('$email','$password','$var','$id')";
            $result = $conn -> query($query);
            if(!$result) echo " INSERT failed $query<br>". $conn->error;
            //echo "Second query: $query";

            $_SESSION['login'] = 1;
            $_SESSION['id'] = $id;
            // header("location: profile.php");
            header("location: ../index.php");
            die();
        }else{
            $_SESSION['message']="Οι κωδικοί δεν ταιριάζουν";
            header("location: user_register.php");
            die();
        }
    }
 ?>

<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Εύδοξος - Εγγραφή</title>

    <link rel="stylesheet" href="/sdi1400301/css/register.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Including the jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/sdi1400301/css/custom.css"/>

    <script src="/sdi1400301/js/login.js"></script>

</head>
<body >
    
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
          <li class="active tab-right"><a href="/sdi1400301/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
          <li class="tab-right"><a href="/sdi1400301/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
        </ul>
         
        <form class="navbar-form navbar-right" action="/sdi1400301/user/search.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="search" placeholder="Αναζήτηση">
          </div>
          <button type="submit" class="btn btn-default">&#128269</button>
        </form>  
      </div>
    </nav>

    <!-- Registration Form -->
    <div class="container">
        <h1 class="welcome text-center">Καινούργιος Λογαριασμός</h1>
        <div class="card card-container">
            <h2 class='login_title text-center'><b>Εγγραφή</b></h2>
            <form class="form-signin" method="post" action="user_register.php" onsubmit="return checkInp()" name="myForm">
                <h2>
                    <font color="red">
                        <?$_SESSION['message']?>
                        <?$_SESSION['message']='';?>
                    </font>
                </h2>
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email(*)</p>
                <input type="email" id="inputEmail" oninput="removeBorder(this)" class="login_box" placeholder="user@email.com" name="Email" required="True" autofocus="True"/>
                <p class="input_title">Όνομα(*)</p>
                <input type="text" id="inputUserName" oninput="removeBorder(this)" class="login_box" placeholder="John" name="Username" required="True" autofocus="True"/>
                <p class="input_title">Επώνυμο(*)</p>
                <input type="text" id="inputSurname"  oninput="removeBorder(this)" class="login_box" placeholder="Doe" name="Surname" required="True" autofocus="True"/>
                <p class="input_title">Α.Φ.Μ.(*)</p>
                <input type="text" id="AFM"  oninput="removeBorder(this)" class="login_box" placeholder="1211345345" name="ID" value="" autofocus="True"/>
                <p class="input_title">Τηλέφωνο(*)</p>
                <input type="text" id="inputPhoneNumber" oninput="removeBorder(this)" class="login_box" placeholder="699999999" name="Phone" required="True" autofocus="True"/>
                <p class="input_title">Κωδικός(*)</p>
                <input type="password" id="inputPassword" oninput="removeBorder(this)" class="login_box" placeholder="******" name="Pwd" required="True"/>
                <p class="input_title">Επαλήθευση Κωδικού(*)</p>
                <input type="password" id="inputRePassword" oninput="removeBorder(this)" class="login_box" placeholder="******" name="RePwd" required="True"/>
                
                <p>Ιδιότητα: </p>
                <div class="radio" id="safe">
                    <label ><input type="radio" name="type" checked="checked" value="4">Φοιτητής</label>
                </div>
                <div class="radio" id="safe">
                    <label ><input type="radio" name="type" disabled="true" value="3">Εκδότης</label>
                </div>
                <div class="radio" id="safe">
                    <label ><input type="radio" name="type" disabled="true" value="2">Υπάλληλος Γραμματείας</label>
                </div>
                <div class="radio" id="safe">
                    <label ><input type="radio" name="type" id="distributor" value="1">Διανεμητής</label>
                </div>
                <div class="radio" id="safe">
                    <label ><input type="radio" name="type" disabled="true" value="0">Επισκέπτης</label>
                </div>
                <br>
                    
                <!-- Verification Button -->
                <button class="btn btn-lg btn-primary" type="submit" id="verbutton">Εγγραφή</button>    
                <a href="/sdi1400301/user/login.php" class="text-right">Έχετε ήδη Λογαριασμό;</a>
            
            </form>
        </div>
    </div>
</body>
</html>