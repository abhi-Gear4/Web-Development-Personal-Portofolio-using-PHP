<!DOCTYPE html>
<html>
<meta charset = "UTF-8">
<head>
<title> Home Page </title>

<?php


// Create connection
      
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}

$sql = "SELECT * FROM WORK_EXPERIENCE";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
     $i=0;
   
    while($row = mysqli_fetch_assoc($result)) {
         
          $data[$i] =$row["COMPANY_NAME"];
          $data1[$i] =$row["START_YEAR"];
          $data2[$i] =$row["END_YEAR"];
          $data3[$i] =$row["DESIGNATION_ROLE"];
          $data4[$i] =$row["ROLE_DESCRIPTION"];
      
         
          
          $i++;
        
        
    }
} 

$sql1 = "SELECT * FROM EDUCATION_DETAILS";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
     $j=0;
   
    while($row = mysqli_fetch_assoc($result1)) {
         
          $info[$j] =$row["DEGREE"];
          $info1[$j] =$row["START_YEAR"];
          $info2[$j] =$row["END_YEAR"];
          $info3[$j] =$row["UNIVERSITY_NAME"];
          $info4[$j] =$row["COURSE_NAME"];
      
         
          
          $j++;
        
        
    }
} 

else {
    echo "0 results";
}


$conn->close();
      


  ?>

<link rel = "stylesheet" href= "style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function loginOpenForm() {
        document.getElementById("loginForm").style.display = "block";
      }

        function loginCloseForm() {
          document.getElementById("loginForm").style.display = "none";
      }

      function contactOpenForm() {
        document.getElementById("contactForm").style.display = "block";
      }


</script>



</head>

<body style="margin: 0px">
  <div class="wrapper">  
          
    <div class="container1">  
      <label for = "show-menu" class="show-menu">Menu</label>
      <input type="checkbox" id="show-menu">
     
          
          <ul >
            <li><a href = "home.php">ABHISHEK NAGARAJ</a> </li>
            <li><a href = "about.php">ABOUT</a> </li>
            <li><a href = "Progess.php">SKILLS</a> </li>
            <li><a href= "portfolio.php"> PORTFOLIO </a></li>
            <li><a href = "Workexperience.php">EXPERIENCE</a> </li>
            <li><a href = "blog.php">BLOG</a> </li>
            <li><a href = "hireme.php">HIRE ME</a> </li>
            <li><a href= "#ContactMePop" onclick="contactOpenForm();"> CONTACT </a></li>
            <li><a href= "#Login" onclick="loginOpenForm();"> LOGIN </a></li>
            <li> <a href= "#SIGNUP" onclick="openForm();"> SIGNUP </a> </li>

          </ul>
      
    
      </div>

      <br>
      
   <br>
    <br>
 


  <div id="SIGNUP">
 <div  class="form-popup" id="myForm" style="left:750px">
  
  <form action="sign_up.php" class="form-container" method="post">
    <h2>check in <span class="close" onclick="closeForm();"  style="padding-right:10%; padding-bottom: 7%" >X</span></h2>
    <label >Name:</label>
    <br>
    <input type="text" name= "Name" class="boxprop" style="width: 90%">
    <br>
    <br>
     <label >LastName:</label>
    <br>
   
    <input type="text" name= "LastName" class="boxprop" style="width: 90%">
    <br>
    <br>
    <label>Email:</label>
    <br>
  
    <input type="email" id="Email" name = "Email" class="boxprop"  style="width: 90%" required>
    <br>
    <br>
      <label >User:</label>
    <br>
    
    <input type="text" name= "UserName"  style="width: 90%" class="boxprop" >
    <br>
     <br>
    <label for="psw">Password:</label>
    <br>
    
    <input type="password"  name="psw" class="boxprop" style="width: 90%" required>
    <br>
    <br>
  
    <label for="rpsw">Repeat password:</label>
    <br>
   
    <input type="password"  name="rpsw"  class="boxprop" style="width: 90%" required>
    <br>
    <br>
    
    <button type="button" class="btn cancel" onclick="closeForm();" style="background-color: grey;">Close</button>
    <button style="float:  right" type ="submit"  name = "submit" class="btn">save</button>
  </form>
</div>


</div>



 <div id="Login">
  <div class="form-popup" id="loginForm">
    <form action="a.php" class="form-container" style="margin-top: 2%">
      <h2 style="color: #2C2C2C;">Log in<span class="close" onclick="loginCloseForm();">X</span></h2>
      <label>User:</label>
      <br>
      <input type="text" name="loginName" class="boxprop" style="width: 90%">
      <br>
      <br>
      <label>Password:</label>
      <br>
      <input type="password" name="pass" class="boxprop" style="width: 90%">
      <br>
      <br>
      <button type="button" class="btn cancel" onclick="loginCloseForm();" style="background-color: grey;">Close</button>
        <button style="float: right" type="submit" name = "submit" class="btn">Get in</button>
      </form>
      </div>        
</div>


<div id="ContactMePop">
  
  
      <div class="form-popup" id="contactForm" style="padding-left: 200px;">
      <form action="b.php" class="form-container">  
      <centre> <h2 style="color: #2C2C2C;  text-align: center;"> Contact Me </h2> </center>
      <table>


      <tr>
      <td>  
        <p> <strong>Feel free to contact me</strong> </p>
   <input type="text" name="Name" class="boxprop" style="font-family: FontAwesome; height: 20px; padding-left: 5%; width: 90%" placeholder="&#xf007;      Name">
<br>
<br>
<input type="text" name="Name" class="boxprop" style="font-family: FontAwesome; height: 20px; padding-left: 5%; width: 90%" placeholder="&#xf15c;      Subject">
<br>
<br>
<input type="text" name="Name" class="boxprop" style="font-family: FontAwesome; height: 20px;padding-left: 5%; width: 90%" placeholder="&#xf0e0;      Email">
<br>
<br>
<br>

<textarea rows="4" cols="30" style="border:none; height: 20px" placeholder ="Your Message"></textarea>
<hr>

       <br>
       <button type="button" class="btn">Send</button>
     
     
     
      <td style="padding-bottom: 60px; padding-left: 50px">
        <p><strong>Address</strong></p>
        <p>1008 Greek Row,Arbor Oaks</p>
        <p><strong>Phone</strong></p>
        <p>+682-701-8027</p>
        <p><strong>Email</strong></p>
        <p>abhishek.nagaraj@mavs.uta.edu</p>
      </td>
     </tr>


  </table>   
 </form>
      </div>

</div>

<br>

<center><h2> Work Experience </h2></center>
<div class="card">

<div class= "container_work">
  <div id="table_experience1">
  
     <p style="font-size: 14px"> <?php echo $data1[1] ?> - <?php echo $data2[1] ?> </p>
   
     <p style="font-size: 20px"> <?php echo  $data[1] ?> </p>

  
    </div>


<div id="table_experience2">

   <p style="font-size: 20px"> <?php echo $data3[1] ?> </p>
   <p style="font-size: 16px"> <?php echo $data4[1] ?></p>

     </div>



</div>
</div>

<br>
<br>
<br>

<br>
<div class="card">

<div class= "container_work">
  <div id="table_experience1">
     <p style="font-size: 14px;"> <?php echo $data1[0] ?> - <?php echo $data2[0] ?> </p>
   
    <p style="font-size: 20px;"> <?php echo  $data[0] ?></p>
    </div>


<div id="table_experience2">

      <p style="font-size: 20px"> <?php echo  $data3[0] ?> </p>

   <p style="font-size: 16px"> <?php echo  $data4[0]?>  </p>


    
     </div>



</div>
</div>

<br>
<br>
<br>

<center><h2> Education </h2></center>
<div class="card">

<div class= "container_work">
  <div id="table_experience1">
  
     <p style="font-size: 14px"> <?php echo  $info1[0] ?>-<?php echo  $info2[0] ?> </p>
   
     <p style="font-size: 20px"> <?php echo  $info[0] ?></p>

  
    </div>


<div id="table_experience2">

   <p style="font-size: 20px"> <?php echo  $info4[0] ?></p>
   <p style="font-size: 12px"> <?php echo  $info3[0] ?></p>

     </div>



</div>
</div>

<br>
<br>
<br>

<br>
<div class="card">

<div class= "container_work">
  <div id="table_experience1">
     <p style="font-size: 14px;"> <?php echo  $info1[1] ?>-<?php echo  $info2[1] ?></p>
   
    <p style="font-size: 20px;"> <?php echo  $info[1] ?> </p>
    </div>


<div id="table_experience2">

      <p style="font-size: 20px"><?php echo  $info4[1] ?></p>

     <p style="font-size: 12px"> <?php echo  $info3[1] ?>  </p>


    
     </div>



</div>
</div>


<br>
<br>




</div>

<footer id="foot_experience">
   
   <a href="#" class="fa fa-facebook" style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-twitter"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-google-plus"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-instagram" style ="font-size: 22px"></a>
      <p style="font-size: 12px"> <strong>Abhishek Nagaraj </strong></p>
      <p > &copy;Abhishek CV.All rights reserved.</p>
      <p > Design- ABHISHEK </p>




 </footer>


</body>

</html>