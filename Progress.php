<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Home Page </title>

<?php
       

    

      // Create connection
      
      
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}
    
  

$sql = "SELECT * FROM PROFESSIONAL_SKILLS";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
     $i=0;
   
    while($row = mysqli_fetch_assoc($result)) {
         
          $data[$i] =$row["PRO_SKILLS"];
   
      
         
          $data1[$i] =$row["RATINGS"];
          
          $i++;
        
        
    }
} 

else {
    echo "0 results";
}


$conn->close();
      


  ?>
  
<link rel = "stylesheet" href= "style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


<body>

  <div id= "wrapper">
  <nav>

  <div class= "top_nav_bar">

  <a href= "#SIGNUP" onclick="openForm();"> SIGNUP </a>
 <a href= "#Login" onclick="loginOpenForm();"> LOGIN </a>
 <a href= "#ContactMePop" onclick="contactOpenForm();"> CONTACT </a>
 <a href= "hireme.php"> HIREME </a>
 <a href= "blog.php"> BLOG </a>
 <a href= "Workexperience.php"> EXPERIENCE </a>
 <a href= "portfolio.php"> PORTFOLIO </a>
 <a href= "Progress.php"> SKILLS </a>
 <a href= "about.html" > ABOUT </a>
   
 <div id = "Header">

 <a href= "home.php" > Abhishek Nagaraj </a>

 </div>

 </div>

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
    <button style="float:  right" type ="button"   class="btn">save</button>
  </form>
</div>


</div>



 <div id="Login">
  <div class="form-popup" id="loginForm">
    <form action="sign_up.php" class="form-container" style="margin-top: 2%">
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
        <button style="float: right" type="button" name = "submit" class="btn">Get in</button>
      </form>
      </div>        
</div>


<div id="ContactMePop">
  
  
      <div class="form-popup" id="contactForm" style="padding-left: 200px;">
      <form action="sign_up.php" class="form-container">  
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
     
     
     
    
     </tr>


  </table>   
 </form>
      </div>

</div>


</nav>

  <br>
  <center><h2> Professional Skills </h2> </center>


<div class="card" >

<div class= "container" >


<table id="table1">
<tr>
<td>
<?php echo  $data[0]  ?> <span style="float: right"><?php echo  $data1[0]  ?></span>
</td>
</tr>

<tr>
<td>
<div id="myProgress">
<div id="myBarj">
    
</div>
</div>
</td>
</tr>

<tr>
<td>
<?php echo $data[1] ?> <span style="float: right"><?php echo  $data1[1]  ?></span>
</td>
</tr>

<tr>
<td>
<div id="myProgress">
<div id="myBarcc">
  
</div>
</div>
</td>
</tr>
<tr>
<td>
<?php echo  $data[2] ?> <span style="float: right"><?php echo  $data1[2]  ?></span>
</td>
</tr>
<tr>
<td>
<div id="myProgress">
<div id="myBarc">
  
</div>
</div>
</td>
</tr>
</table>

<table id="table2" style ="width: 50%">
<tr>
<td>
<?php echo $data[3] ?><span style="float: right"><?php echo  $data1[3]  ?></span>

</td>
</tr>

<tr>
<td>
<div id="myProgress">
<div id="myBarphp">
    
</div>
</div>
</td>
</tr>

<tr>
<td>
<?php echo $data[4] ?><span style="float: right"><?php echo  $data1[4]  ?></span>
</td>
</tr>

<tr>
<td>
<div id="myProgress">
<div id="myBarhtml">
  
</div>
</div>
</td>
</tr>
<tr>
<td>
<?php echo $data[5] ?><span style="float: right"><?php echo  $data1[5]  ?></span>
</td>
</tr>
<tr>
<td>
<div id="myProgress">
<div id="myBarjs">
  
</div>
</div>
</td>
</tr>
</table>

</div>
</div>


<br>
<br>
</div>
<footer id="foot_progresss">
   
   <a href="#" class="fa fa-facebook" style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-twitter"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-google-plus"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-instagram" style ="font-size: 22px"></a>
      <p style="font-size: 12px"> <strong>Abhishek Nagaraj </strong></p>
      <p > &copy;Abhishek CV.All rights reserved.</p>
      <p > Design- Abhishek </p>




 </footer>




</body>

</html>



