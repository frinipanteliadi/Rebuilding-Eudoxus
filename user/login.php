<!DOCTYPE html>
<?php
  session_start();
  //check if he has logged in
  if(array_key_exists('login', $_SESSION)){
    if($_SESSION['login']==1){
      header("location:../index.php");
      die();
    }
  }
  $_SESSION['message']='';
  require_once '../login_db.php';
  $conn = new mysqli($hn,$un,$pw,$db);
  if($conn->connect_error) die($conn->connect_error);
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $query = "SELECT * FROM Login WHERE email='$email'";
    $result = $conn -> query($query);
    if(!$result) die ($conn->error);
    if($result->num_rows==0){
      $_SESSION['message']='Το email είναι λάθος';
    }else{
      $result->data_seek(0);
      $login=$result->fetch_array(MYSQLI_ASSOC);
      if($login['password']==$_POST['password']){
        $_SESSION['login'] = 1;
        // $query = "SELECT * FROM User WHERE id =".$login['User_id'];
        $query = "SELECT * FROM User WHERE id=".$login['id'];
        $result = $conn -> query($query);
        if(!$result) die ($conn->error);
        $result->data_seek(0);
        $user=$result->fetch_array(MYSQLI_ASSOC);
        $_SESSION['username'] = $user['name'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['type'] = $login['type'];
        header("location:../index.php");
        die();
      }else{
        $_SESSION['message']='Ο κωδικός είναι λάθος';
      }
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

    <title>Εύδοξος - Είσοδος</title>

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
          <li class="tab-right"><a href="/sdi1400301/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
          <li class="active tab-right"><a href="/sdi1400301/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
        </ul>
         
        <form class="navbar-form navbar-right" action="/sdi1400301/user/search.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="search" placeholder="Αναζήτηση">
          </div>
          <button type="submit" class="btn btn-default">&#128269</button>
        </form>  
      </div>
    </nav>    

    
     <div class="container">
        <h1 class="welcome text-center">Καλώς Ήρθατε</h1>
        <div class="card card-container">
            <h2 class='login_title text-center'><b>Σύνδεση</b></h2>
            <hr/>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <?
                    if(array_key_exists('mustlogin', $_SESSION)){
                      echo '<h2>'.$_SESSION['mustlogin'].'</h2>';
                      $_SESSION['mustlogin']='';
                    }
                ?>
                <h2><?$_SESSION['message']?></h2>
                <p class="input_title">Email</p>
                <input type="email" id="inputEmail" class="login_box" placeholder="user@mail.com" name="email"  required="true" autofocus="true" />
                <p class="input_title">Κωδικός</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="******" name="password"  required="true"/>
                <button class="btn btn-lg btn-primary" type="submit"">Σύνδεση</button>
                <a href="/sdi1400301/user/user_register.php">Δεν έχετε λογαριασμό;</a>
                <hr/>
                <a href="#" class="text-right">Ξεχάσατε Τον Κωδικό;</a>
            </form>
        </div>
    </div>
    
</body>
</html>