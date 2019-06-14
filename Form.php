<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
		<title>Blood_Reg-DesignEye</title>
                
        <style>
            body {
                background: #e8f0fe47;
            }
            
            label {
                font-family: Courier New;
            }
            
            input {
                font-family: Courier New;
                width: 30%;
                ;
            }
            
            p {
                text-align: center;
                font-family: courier new;
                font-size: 2em;
                color: coral;
            }
            
        </style>
	
    </head>

    
    
    
    
	<body>
    
<!-- HTML form for user register for blood donation-->
			<div class="container">
                
                <p>Donate Blood, Save Life</p>
  
              <form method="POST" action="Form.php">
                <div>
                  <label for="name"><b>Name:</b></label><br>
                  <input type="text" placeholder="Type name here..." name="name" required><br><br>
                    
                    <label for="bld"><b>Blood Group:</b></label>
                    <select type="text" placeholder="Enter blood group" name="bld" required>
                        <option>A+</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>A-</option>
                        <option>B-</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select><br>

                  <label for="email"><b>email:</b></label><br>
                  <input type="text" placeholder="Type email..." name="email" required><br>
                    
                    <label for="phn"><b>Phone Number:</b></label><br>
                  <input type="number" placeholder="Type mobile number..." name="phn" required><br>
                    
                  <label for="adrs"><b>Address:</b></label><br>
                  <input type="text" placeholder="Type address..." name="adrs" required><br><br>

                  <button class="btn btn-dark my-2 my-sm-0" name="reg" type="submit">Submit</button>
                </div>
              </form>
               <br> <a href="user.php"><button class="btn btn-dark my-2 my-sm-0">Back</button></a>
                
            </div>
            	
    </body>

    
</html>


<?php  
  
//make connection here
include("Config.php");  
if(isset($_POST['reg']))  
{  
//   getting result from the post array after submitting the form.
    $user_name=$_POST['name'];  
    $user_blood=$_POST['bld'];  
    $user_email=$_POST['email'];  
    $user_number=$_POST['phn'];  
    $user_address=$_POST['adrs'];  

  
//  query checking weather if user already registered so register for blood donation  
    $check_email_query="SELECT * FROM `students` WHERE email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  



//insert the user into the database.  
    $insert_user="INSERT INTO `reg`(`id`,`name`,`blood`,`email`,`number`,`address`) VALUES(NULL,'$user_name','$user_blood','$user_email','$user_number','$user_address')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
echo "<script> location.href='user.php'; </script>";
        exit;
   }
    }
    
else
{
 echo "<script>alert('Email $user_email is not registered, Please try with your valid email!')</script>";  
exit(); 
} 
}

?>