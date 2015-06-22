<?php

$nameErr = $emailErr = $rollnoErr = $passwordErr = $departmentErr = $yearErr = $captchaErr = $imageErr = "";
$name = $rollno = $department = $year = $email = $password = $uniqueno = "";  

if (isset($_POST['submit'])) 
{
	
	
   if (empty($_POST["Name"]))
   {
     $nameErr .= "Name is required";
    } 
    else 
	{
     $name = test_input($_POST["Name"]);
     
     if (!preg_match("/^[a-zA-Z .]*$/",$name)) 
	 {
       $nameErr .= "Only letters and white space and dot allowed"; 
     }
	 
     if (strlen($name) < 3 OR strlen($name) > 20)
		 {
			$nameErr .= " Name should be within 3-20 characters long.";
		}
   }
   
   if (empty($_POST["Email"])) 
   {
     $emailErr .= "Email is required";
   } 
   else 
   {
     $email = test_input($_POST["Email"]);
     
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	 {
       $emailErr .= "Invalid email format"; 
     }
   }
     
   if (empty($_POST["RollNo"])) 
   {
     $rollnoErr .= "Roll Number is required";
   } 
   else 
   {
     $rollno = test_input($_POST["RollNo"]);
     
     if (!is_numeric($rollno)) 
	 {
       $rollnoErr .= "Invalid Roll Number"; 
     }
	 
	 if (strlen($rollno)!= 9)
	 {
		 $rollnoErr .= "Enter a 9 digit roll number";
	 }
   }

   if (empty($_POST["pwd"]))
   {
	   $passwordErr .= "Password is required";
   }
   else 
   {    
	   $password = test_input($_POST["pwd"]);
	   
	   if (strlen($password) < 6)
	   {
		   $passwordErr .= "Enter at least a 6 character long password";
	   }
	   if( strlen($password) > 20 ) 
	   {
	     $passwordErr .= "Password too long!";
       }

        if( !preg_match("#[0-9]+#", $password) ) 
		{
	     $passwordErr .= "Password must include at least one number! ";
        }

        if( !preg_match("#[a-z]+#", $password) ) 
		{
	      $passwordErr .= "Password must include at least one letter!";
        }

        if( !preg_match("#[A-Z]+#", $password) )
		{
	      $passwordErr .= "Password must include at least one CAPS!";
		}
		   
   }	

    
	
	$department	= test_input($_POST["Department"]);
	if ($department == 0) 
   {
			$departmentErr .= "Please select your department";
	}
	
	$year	= test_input($_POST["Year"]);
	if ($year == 0) 
   {
			$yearErr .= "Please select your Year of Study";
	}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


   if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
	{
		$uploadOk = 0;
    echo 'No Profile picture uploaded';
    }
	else
	{
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) 
	  {
        
        $uploadOk = 1;
      } 
	  else 
	  {
        echo "File is not an image.";
        $uploadOk = 0;
      }
	



if ($_FILES["fileToUpload"]["size"] > 500000)
	{
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
   }

if(!($imageFileType == "jpg" ||$imageFileType == "JPG" || $imageFileType == "png" || $imageFileType == "jpeg"|| $imageFileType == "gif" )) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0)
	{
      $imageErr .= "Please Upload your Profile picture";
    } 
	else 
 {
    if (!(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)))
		{
          
        echo "Sorry, there was an error uploading your file.";
    }
   }
	}   
	
	session_start();
	
	if(($_REQUEST['captcha'] == $_SESSION['vercode']))
   {
     $captchaErr = "";
    }
    else
	{
      $captchaErr .= "Please Enter the captcha correctly and re-upload the profile picture";
    }

}



function test_input($data)
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
 
 
?>