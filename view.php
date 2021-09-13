<?php 
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
include "db.php";


    $sql= "SELECT * FROM employee WHERE id= ?";
    if($stmt =mysqli_prepare($conn,$sql)){
        mysqli_stmt_bind_param($stmt,"i",$param_id);

        
        $param_id= trim($_GET["id"]);
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result)==1){
                    
                $row= mysqli_fetch_array($result, MYSQLI_ASSOC);

                $name= $row["name"];
                $designation= $row["designation"];
                $contact = $row["contact"];
                $email =$row["email"];
            }else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
        <style>
            .wrapper{
                width: 600px;
                margin: 0 auto;
            }
            th,td,tr,table{
           border-collapse:collapse;
            width: 100%;
            text-align : left;
            padding:5px 
            
        }
            </style>
            </head>
            <body>
                <div class= "wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="mt-5 mb-3">View Employee</h1>
                                <div class="form-group">
                                    <p><label> Name:</label>
                                    <b><?php echo $row["name"]; ?></b></p>
                </div>
                <div class="form-group">
                <p> <label> Designation: </label>
                                   <b> <?php echo $row["designation"]; ?></b></p>
                </div>
                <div class="form-group">
                                    <p>  <label> Contact:</label>
                                    <b><?php echo $row["contact"]; ?></b></p>
                </div>
                <div class="form-group">
                                     <p> <label> email:</label>
                                    <b><?php echo $row["email"]; ?></b></p>
                </div>
               <p><a href= "new.php" class="btn btn-primary">Back</a></p>
               
        </div>
        </div>
        </div>
        </div>
        </body>
        </html>
