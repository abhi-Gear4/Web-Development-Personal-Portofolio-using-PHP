<!DOCTYPE html>
<html >
<meta charset="UTF-8">

<head>

<link rel="stylesheet" href="style.css">

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
<body id="port">
   <div id="wrapper">

 <div class= "top_nav_bar">

 <a href= "#SIGNUP" onclick="openForm();"> SIGNUP </a>
 <a href= "#Login" onclick="loginOpenForm();"> LOGIN </a>
 <a href= "#ContactMePop" onclick="contactOpenForm();"> CONTACT </a>
 <a href= "hireme.php"> HIREME </a>
 <a href= "blog.php"> BLOG </a>
 <a href= "Workexperience.php"> EXPERIENCE </a>
 <a href= "portfolio.php"> PORTFOLIO </a>
 <a href= "Progress.php"> SKILLS </a>
 <a href= "about.php" > ABOUT </a>
   
 <div id = "Header">

 <a href= "home.php"  > Abhishek Nagaraj</a>

 </div>

 </div>
   <div id="SIGNUP">
 <div  class="form-popup" id="myForm">
  
  <form action="sign_up.php" class="form-container">
    <h2>check in <span class="close" onclick="closeForm();"  style="padding-right:10%; padding-bottom: 7%" >x</span></h2>
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
  
    <input type="email" id="Email" class="boxprop"  style="width: 90%" required>
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
    <button style="float:  right"type="submit" name="submit" class="btn">save</button>
  </form>
</div>


</div>



 <div id="Login">
  <div class="form-popup" id="loginForm">
    <form action="sign_up.php" class="form-container" style="margin-top: 2%">
      <h2 style="color: #2C2C2C;">Log in<span class="close" onclick="loginCloseForm();">x</span></h2>
      <label>User:</label>
      <br>
      <input type="text" name="Name" class="boxprop" style="width: 90%">
      <br>
      <br>
      <label>Password:</label>
      <br>
      <input type="text" name="Name" class="boxprop" style="width: 90%">
      <br>
      <br>
      <button type="button" class="btn cancel" onclick="loginCloseForm();" style="background-color: grey;">Close</button>
        <button style="float: right" type="submit" name="submit" class="btn">Get in</button>
      </form>
      </div>        
</div>


<div id="ContactMePop">
  
  
      <div class="form-popup" id="contactForm">
      <form action="action_page.php" class="form-container">  
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

  <center><h1> Portfolio </h1> </center>

      
      <div id= "tab" style="padding-left: 450px;">
    


        <a href="#laptop" class="fa fa-laptop " style ="font-size: 20px"> </a>
        <a href="#faimage" class="fa fa-image"  style ="font-size: 20px"> </a>
        <a href="#facamera" class="fa fa-camera"  style ="font-size: 20px"> </a>

  
     </div>

<div id="laptop">

  <a href="#laptop"> </a>

</div>

<div id="faimage">

  <a href="#faimage">
 </a>

</div>

<div id="facamera">

  <a href="#facamera">

 </a>

</div>



<center>


 </center>
 <br>








</div>

<footer id="foot_progresss">
   
   <a href="#" class="fa fa-facebook" style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-twitter"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-google-plus"  style ="font-size: 22px"> </a>
        <a href="#" class="fa fa-instagram" style ="font-size: 22px"></a>
 




 </footer>

 
</body>
</html>
