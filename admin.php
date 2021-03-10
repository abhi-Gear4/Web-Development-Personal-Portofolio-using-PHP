<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Home Page </title>
 <link rel = "stylesheet" href= "style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
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
 

<body>
 <div class="card">
 <form action="sign_up.php" method="POST" class="form-container">
			<h2 style="color: #2C2C2C;">check in<span class="close" onclick="closeForm();">x</span></h2>
			<label> ABOUT:</label>
			<br>
			<input type="text" name="Name" class="boxprop">
			<br>
			<br>
			<label >NAME:</label>
			<br>
			<input type="text" name="Name" class="boxprop" required>
			<br>
			<br>
			<label>AGE:</label>
			<br>
			<input type="text" name="Age" class="boxprop">
			<br>
			<br>
			<label>EMAIL:</label>
			<br>
			<input type="email" id="Email"  name="Mail" class="boxprop" required>
			<br>
			<br>
			<label>PHONE:</label>
			<br>
			<input type="text" name="Phone" class="boxprop">
			<br>
			<br>
			<label >ADDRESS:</label>
			<br>
			<input type="text" name="psw" class="boxprop" required>
			<br>
			<br>
			<label >LANGUAGES:</label>
			<br>
			<input type="text" name="rpsw" class="boxprop" required>
			<br>
			<br>

			<button type="button" class="btn cancel" onclick="closeForm();" style="background-color: grey;">Update</button>
<!--     		<button style="float: right" type="submit" value="submit" class="btn" onclick="validateSignUp()"></button>
 --> 			


        </form>
 		</div>
<br>
<br>


<div class="card">
 <form action="sign_up.php" method="POST" class="form-container">
			<table  cellspacing="10" cellpadding="0" id="table_one" style="width: 80%;" >

    <tr>
        <td>
        	SKILLS: <br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
        </td>
        <td>
        	SKILL RATINGS:
        	<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
        </td>

    </tr>
</table>


			<button type="button" class="btn cancel" onclick="closeForm();" style="background-color: grey;">Update</button>
<!--     		<button style="float: right" type="submit" value="submit" class="btn" onclick="validateSignUp()"></button>
 --> 			</form>
 		</div>


 		<br><br>

 		<div class="card">
 <form action="sign_up.php" method="POST" class="form-container">
			<table  cellspacing="10" cellpadding="0" id="table_one" style="width: 80%;" >
    <th> EXPERIENCE</th>
    <tr>
        <td>
        	COMPANY:<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>

        </td>
        <td>
        	DESCRIPTION:
        	<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>

        </td>

    </tr>
</table>

<table  cellspacing="10" cellpadding="0" id="table_one" style="width: 80%;" >
    <center><th> EDUCATION</th></center>
    <tr>
        <td>
        	DEGREE:<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>

        </td>
        <td>
        	UNIVERSITY:
        	<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>
<input type="text" name="Name" class="boxprop">
<br><br>

        </td>

    </tr>
</table>


			<button type="button" class="btn cancel" onclick="closeForm();" style="background-color: grey;">Update</button>
<!--     		<button style="float: right" type="submit" value="submit" class="btn" onclick="validateSignUp()"></button>
 --> 			</form>
 		</div>


 </body>
 </html>