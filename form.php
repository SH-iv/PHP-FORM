<?php include("run.php"); 
error_reporting(0);
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIGN UP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="main">
       <div class="register">
         <h2>REGISTER HERE</h2>
         <form action="#" method="POST">
           <label>FIRST NAME:</label>
           <br>
           <input type="text" name="Fname" id="name" placeholder=" YOUR FIRST NAME" >
           <br><br>
           <label>LAST NAME:</label>
           <br>
           <input type="text" name="Lname" id="name" placeholder=" YOUR LAST NAME" >
           <br><br>
           <label>AGE:</label>
           <br>
           <input type="number" name="age" id="name" placeholder="HOW OLD ARE YOU?" >
           <br><br>
           <label>EMAIL:</label>
           <br>
           <input type="email" name="email" id="name" placeholder=" YOUR VALID EMAIL" >
           <br><br>
           <label >GENDER:</label>
           <br>
           &nbsp;&nbsp;&nbsp;
           <input value="m" type="radio" name="gender"  id="male" >
           &nbsp;
           <span  id="male">MALE</span>
           &nbsp;&nbsp;&nbsp;&nbsp;
           <input value="f" type="radio" name="gender"  id="female" >
           &nbsp;
           <span  id="female">FEMALE</span>
           <br><br>
           <label >Preferred Language:</label>
           <br>
           &nbsp;&nbsp;&nbsp;
           <input  value="H" type="checkbox" name="lang" id="hindi">
           &nbsp;
           <span  id="hindi">HINDI</span>
           &nbsp;&nbsp;&nbsp;&nbsp;
           <input value="E" type="checkbox" name="lang" id="english">
           &nbsp;
           <span  id="eng">ENGLISH</span>
           <br><br>
          <input  type="submit" value="Submit"  id="submit" name="submitt">
           </form>
       </div>
     </div>
</body>
</html>

<?php
  $Fname =$_POST['Fname'];
 $Lname =$_POST['Lname'];
 $age =$_POST['age'];
 $email =$_POST['email'];
 $gender =$_POST['gender'];
 $Lang =$_POST['lang'];
  
 $conn = new mysqli('localhost','root','','test1');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("Insert into registration(Fname,Lname,age,email,gender,Lang) 
      values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $Fname, $Lname, $age, $email, $gender, $Lang);
    $stmt->execute();
    echo $execval;
    $stmt->close();
    $conn->close();
  }
?>
