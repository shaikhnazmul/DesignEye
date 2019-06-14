<!DOCTYPE html>
<html>
	<head>

        <!-- demo code of project course -by -> Shaikh Nazmul Islam Masud -->
		<title>DesignEye</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		

        
        <!-- link of stylesheet -->
		<link rel="stylesheet" href="style.css" />
		

        
        
        <!-- login button with java script code -->
			<script type="text/javascript">
				function formhover () {
				alert("Please check your email for next procedures");
				}
				function masud () {
				alert("Please check before order");
				}
                function about () {
				alert("Shaikh Nazmul Islam.  ID: 161-35-125, Dept. of Software Engineering, Daffodil International University");
				}
                function nazmul () {
                    alert("Please get registered for more access on the internet, click on Sign Up button");
                }
                function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
 }
                function checkName() {

    var name = document.getElementById('txtName');
    var filter = /^([a-zA-Z])+$/;

    if (!filter.test(name.value)) {
    alert('Please provide a valid Name');
    name.focus;
    return false;
 }
 }
            </script>
	
    </head>

    
    
    
    
	<body>

<!-- Main div contains the whole background -->
		<div class="bgimg">
		  
<!-- Daffodil Logo -->
			<div class="logo">
				<a href="index.php" target="_blank" ><img src="img/DE.png" alt="www.facebook.com/DesignEye5" title="DesignEye" class="logoanimation" /></a>
			</div>
			  
<!-- DROPDOWN MENU CONTENTS -->
			<div class="dropdownmenu">
			<ul id="menu">
				<li><a>Learn</a>
                    <ul>
                        <li><a href="#" onclick="nazmul ()">Books</a></li>
                        <li><a href="#" onclick="nazmul ()">Educational Info</a></li>
                        <li><a href="#" onclick="nazmul ()">University Info</a></li>
                        <li><a href="#" onclick="nazmul ()">Technology</a></li>
                    </ul>
                </li>
				
				<li><a>Cloth's</a><!-- Dropdown menu Options -->
					<ul>
						<li><a>Men's</a>
							<ul>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">T-shirt</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Shirt</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Pant</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Formal</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Other</a></li>
							</ul>
						</li>
						<li><a>Women's</a>
							<ul>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">T-shirt</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Shirt</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Pant</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Formal</a></li>
								<li><a href="https://www.facebook.com/DesignEye5" target="_blank">Other</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
                
				<li><a>Food</a> <!-- Dropdown Menu Options -->
					<ul>
						<li><a>Fast food</a>
							<ul>
								<li><a href="#" onclick="masud ()">fattty</a></li>
								<li><a href="#" onclick="masud ()">Non-fatty</a></li>
							</ul>
						</li>
						<li><a>Normal food</a>
							<ul>
								<li><a href="#" onclick="masud ()">vegetarian</a></li>
								<li><a href="#" onclick="masud ()">Non-vegetarian</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li><a>Find Flat</a>
                    <!-- Dropdown Menu Options -->
					<ul>
						<li><a href="#" onclick="nazmul ()">Barishal</a></li>
						<li><a href="#" onclick="nazmul ()">Chattagram</a></li>
						<li><a href="#" onclick="nazmul ()">Dhaka</a></li>
						<li><a href="#" onclick="nazmul ()">Khulna</a></li>
						<li><a href="#" onclick="nazmul ()">Mymensingh</a></li>
						<li><a href="#" onclick="nazmul ()">Rajshahi</a></li>
						<li><a href="#" onclick="nazmul ()">Sylhet</a></li>
						<li><a href="#" onclick="nazmul ()">Rangpur</a></li>
					</ul>
				</li>
				
				<li><a>More</a>
                    <ul>
                        <li><a href="#" onclick="nazmul ()">Health</a></li>
                        <li><a href="#" onclick="about ()" >About</a></li>
                    </ul>
                </li>
			</ul>
			</div>
			

            
            
            <!-- HTML form modal for log in-->
			<div id="id01" class="modal">
  
              <form class="modal-content animate" method="POST" action="index.php">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">
                  <label for="uname"><b>Email</b></label>
                  <input type="text" placeholder="Enter email" name="email" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <button name="login" type="submit">Login</button>

                </div>

                <div class="container" >
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="" onclick="formhover ()">password</a>?</span>
                </div>
              </form>
            </div>
            
            
            
            
            <!-- HTML form modal for sign in-->
			<div id="id02" class="modal">
  
              <form class="modal-content animate" method="POST" action="index.php">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">
                  <label for="name"><b>Full Name</b></label>
                    <input type='text' placeholder="Enter Name" name="name" id='txtName' required>
                    
                  <label for="email"><b>email</b></label>
                  <input type='text' placeholder="Enter email" name="email" id='txtEmail' onclick='Javascript:checkName();' required />
                    
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname"  onclick='Javascript:checkEmail();' required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <button  name="register" type="submit">Sign up</button>

                </div>

                <div class="container" >
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                  
                </div>
              </form>
            </div>
            
            
            
            
            
			  			
<!-- log in & signup button -->
			<button class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</button>
			
            <button class="signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign up</button>
			
    
                        
		</div>
	
        
        
        <!-- middle front-->
            <div class="middle">
                <p>Get all your needs in one place</p>
            </div>
        
        
        
        
	</body>

    
</html>
<?php  
  
//make connection here
include("Config.php");  
if(isset($_POST['register']))  
{  
//   getting result from the post array after submitting the form.
    $user_name=$_POST['name'];  
    $user_pass=$_POST['psw'];  
    $user_email=$_POST['email'];  
    $user_username=$_POST['uname'];  

  
     
//  query checking weather if user already registered so can't register again.  
    $check_email_query="SELECT * FROM `students` WHERE email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    } 
else
{
//insert the user into the database.  
    $insert_user="INSERT INTO `students`(`id`,`name`,`username`,`email`,`password`) VALUES(NULL,'$user_name','$user_username','$user_email','$user_pass')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
 echo "<script> location.href='user.php'; </script>";
        exit;
   }
}	
  
  
}  
  if(isset($_POST['login']))  
{  
//     checking the info from database to login
    $user_pass=$_POST['psw'];  
    $user_email=$_POST['email']; 
     

  
     
//  email and pass matches then login  
    $check_email_query="SELECT * FROM `students` WHERE email='$user_email' AND password='$user_pass'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script> location.href='user.php'; </script>"; 
exit();  
    } 
else
{
        echo "<script>alert('Wrong username or password, try again');</script>";  
}	
  
  
}  
?>