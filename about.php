<!DOCTYPE html>
<html>
<meta charset = "UTF-8">
<head>
<title> Home Page </title>


<?php

      

      // Create connection
      

      $conn = mysqli_connect($servername, $username, $password, $database);
      

    
      if (!$conn) {

          die("Connection failed: " . mysqli_connect_error());

      }

    
   
       $sql= "SELECT * FROM BASIC_INFO";
       
     $result = $conn->query($sql);
        if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
          $data =$row["ABOUT"] ;
          $data1 =$row["AGE"] ;
          $data2 =$row["EMAIL"] ;
          $data3 =$row["PHONE"] ;
          $data4 =$row["ADDRESS"] ;
          $data5 =$row["LANGUAGE"] ;
          
       
    }
    
} 
else {
    echo "0 results";
}

$conn->close();
      
  ?>

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

<link rel = "stylesheet" href= "style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

</head>
 
  


<body>
 <div id="wrapper">
  <div class= "top_nav_bar">

 <a href= "#SIGNUP" onclick="openForm();"> SIGNUP </a>
 <a href= "#LOGIN" onclick="openForm();"> LOGIN </a>
 <a href= "#CONTACT" onclick="openForm();"> CONTACT </a>
 <a href= "hireme.html"> HIREME </a>
 <a href= "#BLOG"> BLOG </a>
 <a href= "Workexperience.html"> EXPERIENCE </a>
 <a href= "portfolio.html"> PORTFOLIO </a>
 <a href= "Progress.html"> SKILLS </a>
 <a href= "about.html"> ABOUT </a>
   
 <div id = "Header">

 <a href= "home.html"> ABHISHEK NAGARAJ</a>

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
        <button style="float: right" type="button" class="btn">Get in</button>
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
    
      </td>
     </tr>


  </table>   
 </form>
      </div>

</div>

  <div id="aboutpage">
<div class="card_about" >


<div class= "container_about">
 
  
    
  <table  style="width: 35%;" id="table_one">
 
  <th> About </th>
  

   <tr>
  <td style="word-break: break-all;"> <?php echo $data ?> 




</td>

   </tr>

 </table>




  <table style="width: 35%; text-align: left;" id="table_two" >

  <th> Basic Information</th>

   

     <tr>
  <td> <strong>AGE:</strong></td>
  <td> <?php echo $data1 ?>  </td>

   </tr>
    
    <tr>
    <td> <strong>Email: </strong> </td>
    <td><?php echo $data2 ?>  </td>
    </tr>
     <tr>
    <td> <strong>PHONE:</strong> </td>
    <td> <?php echo $data3 ?> </td>
    </tr>
     <tr>
    <td> <strong>ADDRESS: </strong></td>
    <td> <?php echo $data4 ?> </td>
    </tr>
     <tr>
    <td> <strong>Language: <strong></td>
    <td> <?php echo $data5 ?> </td>
    </tr>



 </table>


     </div>


</div>
 </div>

</div>
<footer id="foot">
   
   <a href="#" class="fa fa-facebook" style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-twitter"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-google-plus"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-instagram" style ="font-size: 22px"></a>
      <p style="font-size: 12px"> <strong>Abhishek</strong></p>
      <p > &copy;Abhishek CV.All rights reserved.</p>
      <p > Design- Abhishek </p>




 </footer>


</body>


</html>

