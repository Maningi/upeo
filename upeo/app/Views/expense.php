<?php
    $uri = service('uri');
  ?>

	<section>
		<div class="row">
			<?= view_cell('\App\Libraries\Navbar::navItem') ?>
			<div class="col-md-9">	
				<div class="container-fluid">							
					<div class='jumbotron border border-secondary'style="background:#ffffff;">
						<div class="content">
							<center><h1 style="color:#ee7800;"><span class="fa fa-credit-card fa-md"></span> Expenses </h1></center>
								<hr></br></br>
							<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text" id="btnGroupAddon2" id="add_button" data-toggle="modal" data-target="#userModal" ><span class="fa fa-search fa-md"></span></div>
									</div>
									<form class="form-inline my-2 my-lg-0" method="POST" action="search/searchExpense">
										<input type="text" class="form-control" name="search" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
										&nbsp <button class="btn btn-secondary gradient-custom-2" type="submit" name="submit"> Search</button>
									</form>
								</div>
									<div class="btn-group" role="group" aria-label="First group">
										<button type="button" class="btn btn-secondary gradient-custom-2" data-toggle="modal" data-target="#addemployee"><i class="fa fa-plus fa-sm"></i> Add Expense</button>
									</div>
								    <div class="btn-group" role="group" aria-label="First group">
										<button type="button" class="btn btn-secondary gradient-custom-2" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus fa-sm"></i> Add Category</button>
									</div>
								    <div class="btn-group" role="group" aria-label="First group">
										<form method="post" action="includes/excel.php" target="_blank">
										<button type="submit" class="btn btn-secondary gradient-custom-2" name="excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export</button>
										</form>
								    </div>
							</div></br>
							<table  class="table  table-hover table-responsive" >
								<thead bgcolor="" class="">
									<tr class="thead">
										<th width="2%" hidden>row</th>
										<th>No</th>
										<th>Category</th>
										<th>Amount</th>										
										<th>Date</th>																	
										<th>Edit</th>	
										<th>Delete</th>	
									</tr>
								</thead>
							</table>	
							<ul class="pagination">							
								<li>
									<a href="?pageno=1"><button type="button" class="btn btn-secondary gradient-custom-2">Pg 1</button></a>
								</li>&nbsp
								<li class="<?php  ?>">
									<a href=" ?>"><button type="button" class="btn btn-secondary gradient-custom-2"><i class="fa fa-backward fa-sm"></i> Prev</button></a>
								</li>&nbsp
								<li class="<?php  ?>">
									<a href="<?php  ?>"><button type="button" class="btn btn-secondary gradient-custom-2"><i class="fa fa-forward fa-sm"></i> Next</button></a>
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
	</section></br>

<!-- Modal add expense -->
	<div class="modal fade" id="addemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-credit-card fa-sm"></i> Add Expense</h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
			    </div>
				<!--add emplyoyee form-->
				<form method='post' action="includes/memberInsert.php" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-3 mb-3">
								<label>Category</label>										
								<select class="browser-default custom-select" name="category" placeholder="Category" required >
									<option value="">Select Name</option>
									<option value=<?php  ?></option>
								</select>		
							</div>
							<div class="col-md-4 mb-3">
								<label>Amount</label>
								<input type='number' name='amount' placeholder="Amount" class="form-control" value=''required>				
							</div>
							<div class="col-md-4 mb-3">
								<label>Date</label>
								<input type='date' name='date' placeholder="Date" class="form-control" value='' required>				
							</div>
						</div>
					</div>
					<div class="modal-footer">        
						<button type="submit" name='expense' class="btn btn-secondary gradient-custom-2"value="submit">Save </button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--end of expense -->

<!-- Modal add category -->
	<div class="modal fade" id="addcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-credit-card fa-sm"></i> Add Category</h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!--add expense form-->
				<form method='post' action="Dashboard/expense" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-9 mb-3">
								<label>Category</label>
								<input type='text' name='category_name' placeholder="Category" class="form-control" value='' required>				
							</div>
						</div>
					</div>
					<div class="modal-footer">        
						<button type="submit" name='category' class="btn btn-secondary gradient-custom-2"value="submit">Save </button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form><!--end of form expense-->
			</div>
		</div>
	</div>
<!--end of expense-->

<!-- Modal edit expense -->
	<div class="modal fade" id="editemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-edit"></i> Edit Member </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!--edit expense form-->
				<form method='post' action="includes/update" enctype="multipart/form-data">
					<div class="modal-body">
						<center><h4> Do You Want to Update?</h4></center>
						<div class="form-row">
							<input type="hidden" name="id" id="id" value=""/>
							<input type="hidden" name="hide" id="id" value=""/>
							<div class="col-md-6 mb-3">
								<label>Email</label>
								<input type='text' name='bookId' id="l_name" placeholder=" First Name" class="form-control" value="" required>				
							</div>
							<div class="col-md-6 mb-3">
								<label>Phone</label>
								<input type='text' name='lname' id="department" placeholder="Last Name" class="form-control" value=''required>				
							</div>
						</div>
					</div>
					<div class="modal-footer"> 		
						<button type="submit" name="submit"class="btn btn-secondary gradient-custom-2">Yes</button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form><!--end of edit expense form-->
			</div>
		</div>
	</div>
<!--end of edit expense-->

<!-- Modal delete expense -->
	<div class="modal fade" id="delemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-user-times"></i> Delete </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				 </div>
				 <!--delete expense form--> 
				<form method='post' action="includes/delete" enctype="multipart/form-data">
					<div class="modal-body">
						<center><h4>Do you want to delete this Member?</h4></center>
						<div class="form-row">
							<input type="hidden" name="delete_id" id="delete_id" value=""/>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="delete"class="btn2 btn-primary">Yes</button>
						<button type="button" class="btn2 btn-secondary" data-dismiss="modal">No</button>        
					</div>
				</form><!--end of delete expense form-->
			</div>
		</div>
	</div>
<!--end of delete expense-->

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