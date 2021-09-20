
<!DOCTYPE html>
 <html>
    <head>
        <title>Welcome</title>
       <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
      
        <style>
        .wrapper{
            width: 960px;
            margin: 0 auto;
            
        }
        
        th,table{
           border-collapse:collapse;
            width: 200%;
            text-align : left;
            padding:5px 
            
        }
    </style>
    <script>
    $(document).ready(function(){
    $("button").click(function(){
             $.ajax({url: "create.php", success: function(result){
             $("#div1").html(result);
    }});
  });
});
</script>
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
              });
    </script>
//       <script>
         
//       var xmlhttp = new XMLHttpRequest();
//       xmlhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//          document.getElementById("demo").innerHTML = this.responseText;
//        }
//     };
//      xmlhttp.open("GET", "create.php", true);
//       xmlhttp.send();
//    }
//        </script> 

</head>
    <body>
    <div id="demo"> 
        <div id="div1">
        <div class="wrapper">
        <div class="container">
            <div class="table">
            <div class="row">
                <div class="col-md-3">
                    <div class="mt-5 mb-3 clearfix">
                       
                        <h2>Employees Details</h2>
                        <a href="create.php" class="btn btn-success " onclick="the_function()" > Add New Employee</a>  
                       <!-- <button type="button" action="create.php" onclick="the_function()" class="btn btn-success">Add New Employee</button></a>  -->
    </div></div></div>  
     
                    <?php
                         include "db.php";

    $sql = "SELECT * FROM employee";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo '<table class="table table-bordered table-striped table-hover">';
            echo "<thead>";
                echo "<tr>";
                    
                    echo "<th>id</th>";
                    echo "<th>Name</th>";
                    echo "<th>designation</th>";
                    echo "<th>contact</th>";
                    echo "<th>email</th>";
                    echo "<th>Action</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                   
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['designation'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" ;
                        echo '<a href="view.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"> <span class="glyphicon glyphicon-eye-open"></span></a>';
                        echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"> <span class="glyphicon glyphicon-pencil"></span></a>';
                        echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="glyphicon glyphicon-trash"></span></p></a>';
                    echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";                            
        echo "</table>";
    
        mysqli_free_result($result);
    } else{
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}


mysqli_close($conn);
?>
</div>
</div>  
                        
<!-- </div> -->
<!-- <script type="text/javascript">

    function deleteAjax(id){

        $.ajax({
            type:'post',
            url:'delete.php',
            data:{delete_id:id},
            success:function(data){
                $('#delete'+id).hide();
            }
            

        });


    }
    </script> -->
</div>
</div>
<!-- <script>
    $document.readyfunction(){

        function create(){
            $ajax({
                url:"create.php",
                method:"POST",
                success:function(data){
                    $(".result").htlm(data);
                }
            });
         }
         $document.on('Click','.delete',function(){
                var id= $(this).attr("id");
                $ajax({
                    url: "delete.php",
                    method: 'POST',
                    data:{id,id},
                    success:function(data){
                        

                }) -->

              
</body>
</html>

       
