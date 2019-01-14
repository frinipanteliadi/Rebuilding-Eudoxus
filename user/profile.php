<!DOCTYPE html>
<html lang="en">
<?php session_start();
    if(!array_key_exists('login', $_SESSION)){
        $_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
        header("location:login.php");
        die();
    }
    if($_SESSION['login']!=1){
            $_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
            header("location:login.php");
            die();
    }
    $_SESSION['message_register']='';
    require_once '../login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
    mysqli_set_charset($conn,'utf8');
    // echo $_SESSION['id'];
    $query = "SELECT * FROM Login WHERE id =".$_SESSION['id'];
    $result = $conn -> query($query);
    if(!$result) die ($conn->error);
    $result->data_seek(0);
    $login=$result->fetch_array(MYSQLI_ASSOC);
    $query = "SELECT * FROM User WHERE id =".$login['id'];
    $result = $conn -> query($query);
    if(!$result) die ($conn->error);
    $result->data_seek(0);
    $user=$result->fetch_array(MYSQLI_ASSOC);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
 

        if($username!='' and $user['name']!=$username){
            $query = "UPDATE user SET name ='$username' WHERE user.id =".$_SESSION['id'];
            $result = $conn -> query($query);
            $_SESSION['username'] = $username;
            if(!$result) die ($conn->error);
            $_SESSION['username']= $username;
        }
        if($surname!='' and $user['surname']!=$surname){
            $query = "UPDATE user SET surname ='$surname' WHERE user.id =".$_SESSION['id'];
            $result = $conn -> query($query);
            if(!$result) die ($conn->error);
        }
        if($email!='' and $login['email']!=$email){
            $query = "UPDATE login SET email ='$email' WHERE login.id =".$_SESSION['id'];
            $result = $conn -> query($query);
            if(!$result) die ($conn->error);
        }


        header("location: profile.php");
        die();
    }
?>
<head>

    <title>Profile</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/sdi1400301/css/custom.css"/>

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
          <li class="tab"><a href="#">Σχετικά με τον Εύδοξο</a></li>
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
      <!-- <li class="tab-right"><a href="/sdi1400301/user/user_register.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a>
      </li>
      <li class="tab-right"><a href="/sdi1400301/user/login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li> -->
    </ul>
        </ul>
         
        <form class="navbar-form navbar-right" action="/sdi1400301/user/search.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control "name="search" placeholder="Αναζήτηση">
          </div>
          <button type="submit" class="btn btn-default">&#128269</button>
        </form>  
      </div>
    </nav>
    <form class="" action="profile.php" method="post">
    <div class="container ">
        <div class="row">
       <!--  <?php
            if(array_key_exists('welcome', $_SESSION)){
                echo '<h2 style= color:green; \">'.$_SESSION['welcome'].'</h2>';
                $_SESSION['welcome']="";
            }
        ?> -->
        <h1>Ο λογαριασμός μου</h1>
        </div>
        <div class="row">
              <div class="col-md-6">
                  <h3>Τα Στοιχεία Μου</h3>
                  <div class="well" id="wellinfo">
                    <p style="font-size: large;" ><strong>Όνομα:</strong> <?=$user['name']?> </p>
                    <p style="font-size: large;" ><strong>Επώνυμο:</strong> <?=$user['surname']?></p>
                    <p style="font-size: large;" ><strong>E-mail:</strong> <?=$login['email']?></p>
                    <button type="button" class="btn btn-primary" id="nochange" onclick="show_auto()">Αλλαγή Στοιχείων</button>
                  </div>
                  <div class="well" style="display:none;" id="welledit">
                        <div class="row">
                            <label class="control-label col-sm-2">Όνομα:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" placeholder="Αλλαγή Ονόματος" name="name" value="<?=$user['name']?> ">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-2">Επίθετο:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="surname" placeholder="Αλλαγή Επίθετου" name="surname" value="<?=$user['surname']?>">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-2">Email:</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email" placeholder="Αλλαγή Email" name="email" value="<?=$login['email']?>">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary" name="user_info">Υποβολή</button>
                            </div>
                            <div class="col-sm-2">
                                <button  onclick="hide_auto()" type="button" class="btn btn-danger">Ακύρωση</button>
                            </div>
                        </div>

                  </div>
                </div>
                <?php
                    if ($user['type']==1){
                        $query = "SELECT * FROM Student WHERE id =".$user['id'];
                        $result = $conn -> query($query);
                        if(!$result) die ($conn->error);
                        if($result->num_rows!=0){
                            $result->data_seek(0);
                            $request=$result->fetch_array(MYSQLI_ASSOC);
                            echo "
                            <div class=\"col-md-6\" >
                            <h3>Στοιχεία Φοιτητή</h3>
                            <div class=\"well\" id=\"wellinfo2\">
                            <p style=\"font-size: large;\"> <strong> Όνομα Πανεπιστημίου:</strong> ".$request['university']." </p>
                            <p style=\"font-size: large;\" ><strong>Εξάμηνο:</strong> ".$request['semester']."</p>
                            <button type=\"button\" class=\"btn btn-primary\" id=\"nochange2\" onclick=\"show_auto2()\">Ενημέρωση Στοιχείων</button>
                              </div>
                              <div class=\"well\" style=\"display:none;\" id=\"welledit2\">
                                    <div class=\"row\">
                                        <label class=\"control-label col-sm-2\">Όνομα Πανεπιστημίου:</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"text\" class=\"form-control\" id=\"university\" placeholder=\"Ενημέρωση Ονόματος\" name=\"university\" value=".$request['university'].">
                                        </div>
                                    </div>
                                    <br/>
                                    <div class=\"row\">
                                        <label class=\"control-label col-sm-2\">Εξάμηνo:</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"text\" class=\"form-control\" id=\"semester\" placeholder=\"Ενημέρωση Εξαμηνου\" name=\"semester\" value=".$request['semester'].">
                                        </div>
                                    </div>
                                    <br/>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <button type=\"submit\" class=\"btn btn-primary\" name=\"user_info\">Υποβολή</button>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <button  onclick=\"hide_auto2()\" type=\"button\" class=\"btn btn-danger\">Ακύρωση</button>
                                        </div>
                                    </div>

                              </div>
                            </div>"; 
                        }
                        else{   
                                    echo"
                                        <form class=\"form-profile\" method=\"post\" action=\"profile.php\">
                                        <div class=\"col-md-6\" >
                                        <h3>Στοιχεία Φοιτητή</h3>
                                        <div class=\"well\">
                                        <span id=\"\" class=\"profile\"></span>
                                        <p style=\"font-size: large;\"> <strong>Όνομα Πανεπιστημίου:</strong>
                                        <input type=\"text\" id=\"inputUniversity\" oninput=\"removeBorder(this)\" name=\"University\" required=\"True\" /></p>
                                        <p style=\"font-size: large;\" ><strong>Εξάμηνο:</strong>
                                        <input type=\"text\" id=\"InputSemester\" oninput=\"removeBorder(this)\"   name=\"Semester\" required=\"True\" /></p>
                                        <button class=\"btn btn-primary\" type=\"submit\" id=\"verbutton\">Υποβολή</button> 
                                        </div>
                                        </form>
                                        ";
                               
                                        $university = $_POST['University'];
                                        $semester = $_POST['Semester'];
                                        $query = "INSERT INTO Student  VALUES ('$university','$semester',".$user['id'].")";
                                        $result = $conn -> query($query);
                                        if(!$result) echo " INSERT failed $query<br>". $conn->error;
                                
                            }
                        }
                ?>    
                
                

</body>
<script>
function hide_auto(){
		document.getElementById("welledit").style.display="none";
		document.getElementById("nochange").style.display="block";
		document.getElementById("wellinfo").style.display="block";
}
function show_auto(){
		document.getElementById("welledit").style.display="block";
		document.getElementById("nochange").style.display="none";
		document.getElementById("wellinfo").style.display="none";
}
function hide_auto2(){
		document.getElementById("welledit2").style.display="none";
		document.getElementById("nochange2").style.display="block";
		document.getElementById("wellinfo2").style.display="block";
}
function show_auto2(){
		document.getElementById("welledit2").style.display="block";
		document.getElementById("nochange2").style.display="none";
		document.getElementById("wellinfo2").style.display="none";
}
</script>
</html>