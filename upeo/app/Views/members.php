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
							<center><h1 style="color:#ee7800;"><span class="fa fa-users fa-md"></span> List of Members </h1></center>
								<hr></br></br>
							<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
								<div class="input-group">
									<div class="input-group-prepend">
									  <div class="input-group-text" id="btnGroupAddon2" id="add_button" data-toggle="modal" data-target="#userModal" ><span class="fa fa-search fa-md"></span></div>
									</div>
									<form class="form-inline my-2 my-lg-0" method="POST" action="">&nbsp
									<input type="text" class="form-control" name="search" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2" />
									&nbsp 
									<button class="btn btn-secondary gradient-custom-2" type="submit" name="submit"> Search</button>
									</form>
								</div> 
								<div class="btn-group" role="group" aria-label="First group">
									<button type="button" class="btn btn-secondary gradient-custom-2" data-toggle="modal" data-target="#addemployee"><i class="fa fa-user-plus fa-sm "></i> Add Member</button>
								</div>
								<div class="btn-group" role="group" aria-label="First group">
									<form method="post" action="#">
										<button type="submit" class="btn btn-secondary gradient-custom-2" name="excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export</button>
									</form>
								</div>
							</div></br>							
							<table  class="table  table-hover table-responsive" >
								<thead bgcolor="" class="">
									<tr class="thead">
										<th width="2%" hidden>row</th>
										<th>Member</th>
										<th>Name</th>										
										<th>Email</th>
										<th>Date of Birth</th>
										<th>Phone</th>
										<th scope"col" width="5%"><center>Edit</center></th>
										<th scope"col" width="5%"><center>Delete</center></th>
									</tr>
								</thead>	
							 		<?php $i=1; foreach($members as $row) {  ?>
									<tr>
										<td><?= $i ?>.</td>
										<td><?= $row['f_name'] ?></td>
										<td><?= $row['email'] ?></td>
										<td><?= $row['dob'] ?></td>
										<td><?= $row['phone'] ?></td>	
										<td><button class='btn btn-secondary btn-sm editbtn'>Edit </button></td>
										<td><button class='btn btn-danger btn-sm delbtn'>Del </button></td>
									 </tr>
								
									 <?php $i++;} ?>
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
								<li><a href=""><button type="button" class="btn btn-secondary gradient-custom-2">Last</button></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</section> </br>
	<!-- End of Section -->
	
	<!-- Modal add member -->
	<div class="modal fade" id="addemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-user-plus fa-sm"></i> Add Member</h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!--add member form-->
				<form method='post' action="Dashboard/members" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label>First Name</label>
								<input type='text' name='f_name' placeholder=" First Name" class="form-control" value='' required>				
							</div>
					
							<div class="col-md-6 mb-3">
								<label>Last Name</label>
								<input type='text' name='l_name' placeholder="Last Name" class="form-control" value=''required>				
							</div>
						</div>
							
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label>Email</label>
								<input type='email' name='email' placeholder="Email" class="form-control" value=''required>				
							</div>

							<div class="col-md-6 mb-3">
								<label>Date of Birth</label>
								<input type='date' name='dob' placeholder="Email" class="form-control" value='' required>				
							</div>
						</div>
						
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label>Phone</label>
								<input type='number' name='phone' placeholder="Phone" class="form-control" value=''required>				
							</div>
						</div>
					</div>
					<div class="modal-footer">        
						<button type="submit" name='modaladd' class="btn btn-secondary gradient-custom-2"value="submit">Save </button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form><!--end of member form-->
			</div>
		</div>
	</div>
	<!--End of add member form-->

	<!-- Modal edit member -->
	<div class="modal fade" id="editemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ff4500;"><i class="fa fa-edit"></i> Update Member </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>

					<!--edit member form-->
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
						<button type="submit" name="submit"class="btn btn-secondary gradient-custom-2">Yes</button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form><!--end of edit form-->
			</div>
		</div>
	</div>
	<!--End of Edit member form-->

	<!-- Modal delete Member -->
	<div class="modal fade" id="delemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ff4500;"><i class="fa fa-user-times"></i> Delete </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				 <!--delete member form--> 
			    <form method='post' action="includes/delete" enctype="multipart/form-data">
					<div class="modal-body">
					   <center><h4>Do you want to delete this Member?</h4></center>
						<div class="form-row">
							<input type="hidden" name="delete_id" id="delete_id" value=""/>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="delete"class="btn btn-secondary gradient-custom-2">Yes</button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">No</button>        
					</div>
				</form><!--end of edit-->
			</div>
		</div>
	</div>
	<!--End of Delete member form-->
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