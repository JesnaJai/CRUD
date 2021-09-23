<?php

include "db.php";
 
$name = $designation = $contact = $email= "";
$name_err = $designation_err = $contact_err = $email_err= "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    }elseif (!preg_match("/^[a-zA-Z-' ]*$/",$input_name)) {
        $name_err = "Only letters and white space allowed";
      } 
    else{
        $name = $input_name;
    }

    $input_designation = trim($_POST["designation"]);
    if(empty($input_designation)){
        $designation_err = "Please enter an designation.";     
    } else{
        $designation = $input_designation;
    }
   
    $input_contact = trim($_POST["contact"]);
    if(empty($input_contact)){
        $contact_err = "Please enter the contact .";     
    
    } elseif(!preg_match('/^[0-9]{10}+$/', $input_contact)){
        $contact_err="Invalid Contact";
    }else{
        $contact = $input_contact;
    }
   
    $input_email=trim($_POST["email"]);
    if(empty($input_email)){
        $email_err=" Please enter the email .";
    }elseif(!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
    }else{
        $email= $input_email;
    }

    if(empty($name_err) && empty($designation_err) && empty($contact_err) && empty($email_err)){
       
        $sql1 = "INSERT INTO employee (name, designation, contact, email) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql1)){
           
            mysqli_stmt_bind_param($stmt, "ssis", $param_name, $param_designation, $param_contact,$param_email);
            
            
            $param_name = $name;
            $param_designation = $designation;
            $param_contact = $contact;
            $param_email= $email;
            
           
            if(mysqli_stmt_execute($stmt)){
               
                header("location: new.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again .";
            }
        }
         
       
        mysqli_stmt_close($stmt);
    
    }
    
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> -->
  
   
    <style>
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
   

</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create</h2>
                     
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                     
                       
                     <div class="form-group">
                           <p> <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div></p>
                       <p> <div class="form-group">
                            <label>designation</label>
                            <input type="text" name="designation" class="form-control <?php echo (!empty($designation_err)) ? 'is-invalid' : ''; ?>"><?php echo $designation; ?>
                            <span class="invalid-feedback"><?php echo $designation_err;?></span>
                        </div></p>
                        <p><div class="form-group">
                            <label>contact</label>
                            <input type="text" name="contact" class="form-control <?php echo (!empty($contact_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $contact; ?>">
                            <span class="invalid-feedback"><?php echo $contact_err;?></span>
                        </div></p>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                      <p>  <input type="submit" class="btn btn-primary"  value="Submit">
                        <a href="new.php" class="btn btn-secondary ml-2"  >Cancel</a></P>

                    
                    </form>
                </div>
            </div>        
        </div>
    </div>
   
</body>
</html>


