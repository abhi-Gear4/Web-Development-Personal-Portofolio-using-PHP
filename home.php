<!DOCTYPE html>
<html>
<meta charset = "UTF-8">
<head>
<title> Home Page </title>

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
<style>
  


</style>



</head>

<body background="art.jpeg">

  <div id = "wrapper">
    <div id= "responsive">


            <header>
    <div class="container">  
        <nav>
          
          <ul >
            <li><a href = "home.php">ABHISHEK NAGARAJ</a> </li>
            <li><a href = "about.php">ABOUT</a> </li>
            <li><a href = "Progress.php">SKILLS</a> </li>
            <li><a href="portfolio.php"> PORTFOLIO </a></li>
            <li><a href = "Workexperience.php">EXPERIENCE</a> </li>
            <li><a href = "blog.php">BLOG</a> </li>
            <li><a href = "hireme.php">HIRE ME</a> </li>
            <li><a href= "#ContactMePop" onclick="contactOpenForm();"> CONTACT </a></li>
            <li><a href= "#Login" onclick="loginOpenForm();"> LOGIN </a></li>
            <li> <a href= "#SIGNUP" onclick="openForm();"> SIGNUP </a> </li>
            <li><a href= "admin.php" > Edit </a></li>

          </ul>
      
        </nav>  
      </div>
    </header>
      </div>
 <br>
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


 <div id= "image">
  <center>
  
  <img src= "mypic1.jpg" alt = "not displaying" height = "175" width ="175">

  </center>

  
  <br>
  <br>
  <center>
    
    <h2> ABHISHEK NAGARAJ </h2>
  </center>
  <center>
    
    <h4> Web Developer, Software Developer </h4>

  </center>
  
  </div >

  <center>
    <button id="b1"> Hire me </button>
    <button id="b2"> Download </button>
  </center>

  <br>

</div>
</div>


  <footer style="text-align: center;
  padding-bottom: 20px;
  padding-left: 0.95%;">

      
        <a href="#" class="fa fa-facebook" style ="font-size: 29px"> </a>
        <a href="#" class="fa fa-twitter"  style ="font-size: 29px"> </a>
        <a href="#" class="fa fa-google-plus"  style ="font-size: 29px"> </a>
        <a href="#" class="fa fa-linkedin" style ="font-size: 29px"></a>
    
          
    </footer>







  </body>


 </html>

