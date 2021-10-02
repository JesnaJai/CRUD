<?php

	include 'connection.php';


?>
	<table class="table" id="warehouse">
										<thead> 
											<tr>
										
												<th>Name</th>
												<th>Designation</th>
												<th>Contact </th>
												<th>Email</th>
                                        	    
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
											
											<?php
											$brands = $connection->query("SELECT * FROM employee");

											while($row=$brands->fetch_array()){?>
											<tr>
												<td><?php echo $row['name']?></td>
												<td><?php echo $row['designation']?></td>
												<td><?php echo $row['contact']?></td>
                                                <td><?php echo $row['email']?></td>
												<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_warehouse<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash"></span></button>
												&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit_warehouse<?php echo $row['id']?>"><span class="glyphicon glyphicon-pencil"></span></button>
																		
												&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view_warehouse<?php echo $row['id']?>"><span class="glyphicon glyphicon-eye-open"></span> </button>
          						
												</td>										
											</tr>


											<?php }
											?>	
											
										</tbody>
										
									</table>

