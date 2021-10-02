<?php
  include 'connection.php';
 
?>
<!-- <meta charset="utf-8"/>
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">

  <link rel="stylesheet" href="assets/css/main.css">
 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

<link rel="stylesheet" href="assets/css/abc.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->


<div class="main">  
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="col-md-12">
      
        <div id="result"></div>
      
        
              <!-- BASIC TABLE -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"><h3><b>Employee Details..</b></h3></h3>

                </div>
                <div class="col-sm-5">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_warehouse" >Add New</button>
                  
                </div>
                <br><br>
                
                <div id="table_content" class="panel-body"><br/><br/>
                  
                

 
                  
                 
                </div>
              </div>
              <!-- END BASIC TABLE -->
            </div>
             
            </div>
            </div>
         <!-- add new employee -->
       
  <div aria-hidden="true"  class="modal fade add_new_warehouse" id="add_new_warehouse" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Employee</h4>
        </div>
        <div class="modal-body">
        
          <form action="" method=" " enctype="multipart/form-data" id="warehouse_form">
             <div class="form-group">
                <label class="control-label"> Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required/> 
                            
	              </div></input>
              
            <div class="form-group">
                <label>designation</label>
				<input type="text" name="designation" id="designation" class="form-control" placeholder="Enter designation" required/></input>                
              </div>
             
               <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email" required/></input> 
              </div>
               <div class="form-group">
                <label>contact</label>
                <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter contact"  ></input>
              </div>

              <div id="result"></div>
              <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary" data-dismiss="modal" id="add_warehouse" name="add_warehouse" >Add</button>
           
           </div>
          </form>
        </div>
        
      </div>
      
    </div>
  </div>

  
  <!-- delete -->
  <?php 
    $brands = $connection->query("SELECT * FROM employee WHERE id > 0");
    while($row = $brands->fetch_array()) { ?>


  <div aria-hidden="true" class="modal fade delete_warehouse" id="delete_warehouse<?php echo $row['id']?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>Are you sure ? Want to delete this Employee ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="delete_warehouse" data-id="<?php echo $row['id']?>">Delete</button>
        </div>
      </div>
    </div>
  </div>

 
  <?php } ?>

  
  
  
  <!-- update   -->
<?php 
  $select_update = $connection->query("SELECT * FROM employee");
  while($fetch = $select_update->fetch_array()) {

?>
  <div class="modal fade" id="edit_warehouse<?php echo $fetch['id']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Employee</h4>
        </div>
        <div class="modal-body">
          <form action="edit_employee.php?warehouse_id=<?php echo $fetch['id'];?>" method="post" enctype="multipart/form-data" id="form_warehouse">

             <div class="form-group">
                <label>Name</label>
				<input type="text" name="employee_name"  id="employee_name" class="form-control" value="<?php echo $fetch['name'];?>" ></input>
                 
              </div>
               <div class="form-group">
                <label>designation</label>
                <input type="text" name="designation"  id="designation" class="form-control" value="<?php echo $fetch['designation'];?>" ></input>
              </div>

          
               <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo $fetch['email'];?>" ></input>
              </div>
  
               <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" id="contact" class="form-control" value="<?php echo $fetch['contact'];?>" ></input>
              </div>
             
              </div>
              <!-- <div id="result"></div> -->
              <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-warning" id="edit_warehouse" name="edit_warehouse">Edit</button>
        </div>
          </form>
        </div>
        
      </div>
      
    </div>
  </div>

<?php } ?>

<!-- view -->
<?php 
    $view = $connection->query("SELECT * FROM employee WHERE id > 0") ;
    while($fetch= $view->fetch_array()) {
        ?>
        <div class="modal fade" id="view_warehouse<?php echo $fetch['id']?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">view Employee</h4>
        </div>
        <div class="modal-body">
          <form action="view_employee.php?warehouse_id=<?php echo $fetch['id'];?>" method="post" enctype="multipart/form-data" id="form_warehouse">

             <div class="form-group">
                <label>Name :</label>
				<?php echo $fetch['name'];?>
                 
              </div>
               <div class="form-group">
                <label>designation :</label>
                <?php echo $fetch['designation'];?>
              </div>

           
               <div class="form-group">
                <label>Email :</label>
                <?php echo $fetch['email'];?>
              </div>
  
               <div class="form-group">
                <label>Contact :</label>
                <?php echo $fetch['contact'];?>
              </div>
             
              </div>
              <!-- <div id="result"></div> -->
              <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <!-- <button type="submit" class="btn btn-warning" id="view_warehouse" name="view_warehouse">Edit</button> -->
        </div>
          </form>
        </div>
        
      </div>
      
    </div>
  </div>

<?php } ?>
<div class="clearfix"></div>
    <footer>
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- <script src="assets/scripts/jquerymin.js"></script>
<script src="assets/scripts/dataTables.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> -->
  

  <script type="text/javascript">
    $(document).ready(function(){
      $('#add_warehouse').click(function(){
        var name = $('#name').val();
        var designation = $('#designation').val();
        var email = $('#email').val();
        var contact = $('#contact').val();
        
       var emailflag = false;
       var numberflag = false;
       var nameflag = false;
       var emptyflag= false;
        if(name== ""){
          alert("enter name");
        }
        if(designation== ""){
          alert("enter designation");
        }
        if(email== ""){
          alert("enter email");
         }
        
        if(contact== ""){
          alert("enter contact");
        }
        if(name != "" && designation != "" && email!= "" && contact!= ""){
          emptyflag= true;
       
        // var contact_val= new RegExp(/^[0-9]{10}+$/);
        // if(contact_val.test(contact)){
        //   alert("hi")
        // }else{
                    // if(contact.toString().length == 10){
                    //   //if(contact.lenght == 10){
                    //     numberflag= true;
                    //  }else{
                    //   alert("enter valid contact"); 
                    //   }    
        // }
         
          if (name.match(/^[a-zA-Z-' ]*$/)) {
            nameflag=true;
          }else{
           alert("Invalid name");
        }

        //const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if(email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
            emailflag=true;
          }else{
           alert("invalid email")
          }
          if(contact.match(/^\d{10}$/)){
            numberflag=true;
          }else{
            alert("invalid contact");
          }            

        }
        // var num= parseInt(contact);
        //   //var test= num/1000000000;
        //   //alert(num);
        //   var test= num/1000000000;
        //   //alert(test);
        //   if(test> 1 && test <9){
        //    numberflag=true;
        //   }else{
        //     alert("enter a valid number");
        //   }
        if(emptyflag== false || numberflag == false || nameflag == false || emailflag == false){

       // alert ("please");
  
        }else{
        
         
         //alert("brands");
         $.ajax({
          url:"add_employee.php",
          type:"POST",
          data:{name:name, designation:designation, email:email, contact:contact},
          dataType:"JSON",
          success:function(data){
            $('.add_new_warehouse').modal('hide');
            
          }
        });
        $('#warehouse_form').trigger('reset');
        }
      });
      setInterval(function(){
        $('#table_content').load('fetch_employee.php');
      }, 200);
    });

    $(document).on('click', '#view_warehouse', function(){
      var ids = $(this).data('id');
      // alert(ids);
      $.ajax({
        url:"view_employee.php",
        type:"post",
        data:"warehouse_id="+ids,
        success:function(data){
          $('.view_warehouse').modal('hide');
        }
      });
    });


    $(document).on('click', '#delete_warehouse', function(){
      var ids = $(this).data('id');
      // alert(ids);
      $.ajax({
        url:"delete_employee.php",
        type:"post",
        data:"warehouse_id="+ids,
        success:function(data){
          $('.delete_warehouse').modal('hide');
        }
      });
    });

    $(document).on('click', '#edit_warehouse', function(){
      var ids = $(this).data('id');
      // alert(ids);
      $.ajax({
        url:"edit_employee.php",
        type:"post",
        // data:{name:name, designation:designation, email:email, contact:contact},
        data:"warehouse_id="+ids,
        dataType:"JSON",
        success:function(data){
          $('.edit_warehouse').modal('hide');
        }
      });
    });


   
  
  </script>