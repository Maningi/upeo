<?php
    $uri = service('uri');
?>

	<section>
		<div class="row">
				<?= view_cell('\App\Libraries\Navbar::navItem') ?>
			<div class="col-md-9">	
				<div class="container-fluid">							
					<div class='jumbotron border border-secondary' style="background:#ffffff;">
						<div class="content">
								<center><h1 style="color:#ee7800;"><span class="fa fa-user fa-md"></span> Users & Roles <span class="fa fa-cogs fa-md"></span> </h1></center>
								<hr>	</br></br>
							<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
								<div class="input-group">
									<div class="input-group-prepend">
									  <div class="input-group-text" id="btnGroupAddon2" id="add_button" data-toggle="modal" data-target="#userModal" ><span class="fa fa-search fa-md"></span></div>
									</div>
									<form class="form-inline my-2 my-lg-0" method="POST" action="search/searchUserRoles">
									<input type="text" class="form-control" name="search" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
									&nbsp <button class="btn btn-secondary gradient-custom-2" type="submit" name="submit"> Search</button>
									</form>
								</div>
								  
								<div class="btn-group" role="group" aria-label="First group">
									<button type="button" class="btn btn-secondary gradient-custom-2" data-toggle="modal" data-target="#addemployee"><i class="fa fa-user-plus fa-sm"></i> Add User</button>
								</div>
							</div></br>
												
							<table  class="table  table-hover table-responsive" >
								<thead bgcolor="" class="">
									<tr class="thead">
										<th width="2%" hidden>row</th>										
										<th>No</th>
										<th>Name</th>										
										<th>Email</th>
										<th>Security Level</th>										
										<th scope"col" width="5%"><center>Edit</center></th>
										<th scope"col" width="5%"><center>Delete</center></th>
									</tr>
								</thead>								
							</table>	
							<ul class="pagination">							
								<li>
									<a href="?pageno=1"><button type="button" class="btn btn-secondary gradient-custom-2">Pg 1</button></a>
								</li>&nbsp
														
								<li class="">
									<a href=""><button type="button" class="btn btn-secondary gradient-custom-2"><i class="fa fa-backward fa-sm"></i> Prev</button></a>
								</li>&nbsp
								<li class="">
									<a href=""><button type="button" class="btn btn-secondary gradient-custom-2"><i class="fa fa-forward fa-sm"></i> Next</button></a>
								</li>&nbsp
								<li>
									<a href="?pageno=<?php  ?>"><button type="button" class="btn btn-secondary gradient-custom-2">Last</button></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>					
	</section>
				
 <!--Data Toogle-->
	<div id="userModal" class="modal fade">
		<div class="modal-dialog">
			<form method="post" id="course_form" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add course</h4>
					</div>		
					<div class="modal-body">
						<label>Enter Course Name</label>
						<input type="text" name="course" id="course" class="form-control"/></br>
						<label>Enter Number of STudents</label>
						<input type="text" name="students" id="students" class="form-control"/></br>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="course_id" id="course_id"/>
						<input type="hidden" name="operation" id="operation"/>
						<input type="submit" name="action" id="action" class="btn btn-primary" value="Add"/>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</form>		
		</div>		
	</div>	
<!--end of data toogle-->
	
<!-- Modal add member -->
	<div class="modal fade" id="addemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-user-plus fa-sm"></i> Add User</h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!--add user form-->
				<form method='post' action="includes/memberInsert.php" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label>Email</label>														
								<select class="browser-default custom-select" name="member" placeholder=" Name" required >

									<option value="">Select Name</option>
									<?php foreach($members as $member) {  ?>
										<option value=<?= $member['email'] ?>> <?= $member['email'] ?> <?= $member['l_name'] ?></option>
										<?php } ?>
								</select>				
							</div>
						
							<div class="col-md-6 mb-3">
								<label>Role</label>
								<select class="browser-default custom-select" name="role" placeholder=" Name" required >
									<option value="">Select Role</option>
									<option value="1">User</option>
									<option value="0">Admin</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label>Enter Password</label>
								<input type='password' name='password' placeholder="Password" class="form-control" value=''required>				
							</div>
							
							<div class="col-md-6 mb-3">
								<label>Confirm Password</label>
								<input type='password' name='cpassword' placeholder="Confirm Password" class="form-control" value=''required>				
							</div>
						</div>
					</div>
					<div class="modal-footer">        
						<button type="submit" name='userRole' class="btn btn-secondary gradient-custom-2"value="submit">Save </button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form><!--end of user form-->
			</div>
		</div>
	</div>

<!-- Modal edit user -->
	<div class="modal fade" id="editemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ff4500;"><i class="fa fa-edit"></i> Update User </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				 <!--edit user form-->
				<form method='post' action="includes/memberUpdate" enctype="">
					<div class="modal-body">
						<center><h4> Do You Want to Update?</h4></center>
						<div class="form-row">
							<input type="hidden" name="id" id="id" value=""/>
							<input type="hidden" name="hide" id="id" value=""/>
							<div class="col-md-6 mb-3">
								<label>Name</label>
								<input type='text' name='bookId' id="l_name" placeholder=" First Name" class="form-control" value="" required>				
							</div>
							<div class="col-md-6 mb-3">
								<label>Email</label>
								<input type='text' name='lname' id="department" placeholder="Email" class="form-control" value=''required>				
							</div>
						</div>
					</div>
					<div class="modal-footer"> 		
						<button type="submit" name="submit"class="btn2 btn-primary">Yes</button>
						<button type="button" class="btn2 btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form><!--end of edit user form-->
			</div>
		</div>
	</div>
<!--end of edit user-->

<!-- Modal delete user -->
	<div class="modal fade" id="delemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ff4500;"><i class="fa fa-user-times"></i> Delete </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				 <!--delete user form-->
				<form method='post' action="includes/delete" enctype="multipart/form-data">
					<div class="modal-body"> 
					   <center><h4>Do you want to delete this User?</h4></center>
						<div class="form-row">
							<input type="hidden" name="delete_id" id="delete_id" value=""/>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="userDelete"class="btn2 btn-primary">Yes</button>
						<button type="button" class="btn2 btn-secondary" data-dismiss="modal">No</button>        
					</div>
				</form><!--end of delete user form-->
			</div>
		</div>
	</div>
<!--end of delete user-->

	<script>
		$(document).ready(function(){
			$('.delbtn').on('click',function(){
				$('#delemployee').modal('show');
				
				$tr = $(this).closest('tr');
				
				var data = $tr.children("td").map(function() {
					return $(this).text();
				}).get();
				
				console.log(data);
				
				$('#delete_id').val(data[0]);		
			});
		});
	</script>
	
	<script>
		$(document).ready(function(){
			$('.editbtn').on('click',function(){
				$('#editemployee').modal('show');
				
				$tr = $(this).closest('tr');
				
				var data = $tr.children("td").map(function() {
					return $(this).text();
				}).get();
				
				console.log(data);
				
				$('#id').val(data[0]);
				$('#f_name').val(data[1]);
				$('#l_name').val(data[2]);
				$('#department').val(data[3]);
			});
		});
	</script>