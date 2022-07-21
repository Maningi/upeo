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
								<center><h1 style="color:#ee7800;"><span class="fa fa-money fa-md"></span> Deposits </h1></center>
								<hr>	</br></br>
							<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
								<div class="input-group">
									<div class="input-group-prepend">
									  <div class="input-group-text" id="btnGroupAddon2" id="add_button" data-toggle="modal" data-target="#userModal" ><span class="fa fa-search fa-md"></span></div>
									</div>
									<form class="form-inline my-2 my-lg-0" method="POST" action="search/searchDeposit">
										<input type="text" class="form-control" name="search" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
										&nbsp <button class="btn btn-secondary gradient-custom-2" type="submit" name="submit"> Search</button>
									</form>
							    </div>
								<div class="btn-group" role="group" aria-label="First group">
									<button type="button" class="btn btn-secondary gradient-custom-2" data-toggle="modal" data-target="#addemployee"><i class="fa fa-plus fa-sm"></i> Add Deposit</button>
								</div>
								<div class="btn-group" role="group" aria-label="First group">
									<form method="post" action="pdf/depositReportPdf" target="_blank">
										<button type="submit" class="btn btn-secondary gradient-custom-2" name="excel"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> pdf</button>
									</form>
								</div> 
							</div></br>
												
							<table  class="table  table-hover table-responsive" >
								<thead bgcolor="" class="">
									<tr class="thead">
										<th width="2%" hidden>row</th>
										<th>No</th>
										<th>Member</th>
										<th>Amount</th>										
										<th>Payment</th>
										<th>Date</th>										
										<th scope"col" width="3%"><center>Details</center></th>										
										<th scope"col" width="7%"><center>Edit</center></th>	
										<th scope"col" width="7%"><center>Delete</center></th>	
									</tr>
								</thead>
								<?php $i=1; foreach($deposits as $row) {  ?>
									<tr>
										<!--<td hidden><?= $row['id'] ?></td>-->
										<td><?= $i ?>.</td>
										<td><?= $row['f_name'] ?></td>
										<td><?= $row['amount'] ?></td>
										<td><?= $row['payment'] ?></td>
										<td><?= $row['date'] ?></td>	
										<td><button class='btn btn-primary btn-sm viewbtn'><i class='fa fa-eye'> view</i></td>
										<td><button class='btn btn-secondary btn-sm editbtn'>Edit </button></td>
										<td><button class='btn btn-danger btn-sm delbtn'>Del </button></td>
									 </tr>
								
									 <?php $i++;} ?>
							</table>	
							<ul class="pagination">							
								<li>
									<a href="?pageno=1"><button type="button" class="btn btn-secondary gradient-custom-2">Pg 1</button></a>
								</li>&nbsp						
								<li class="<?php  ?>">
									<a href="<?php ?>"><button type="button" class="btn btn-secondary gradient-custom-2"><i class="fa fa-backward fa-sm"></i> Prev</button></a>
								</li>&nbsp
								<li class="<?php ?>">
									<a href="<?php ?>"><button type="button" class="btn btn-secondary gradient-custom-2"><i class="fa fa-forward fa-sm"></i> Next</button></a>
								</li>&nbsp
								<li>
									<a href="?pageno=<?php?>"><button type="button" class="btn btn-secondary gradient-custom-2">Last</button></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>					
		</div>
	</section></br>

<!-- Modal add Deposit -->
	<div class="modal fade" id="addemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-money fa-sm"></i> Add Deposit</h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>	
				<!--add deposit form-->
				<form method='post' action="Dashboard/deposit" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label>Name</label>	
																							
								<select class="browser-default custom-select" name="member" placeholder=" Name" required >

									<option value="">Select Name</option>
									<?php foreach($members as $member) {  ?>
										<option value=<?= $member['id'] ?>> <?= $member['f_name'] ?> <?= $member['l_name'] ?></option>
										<?php } ?>
								</select>
													
							</div>
							<div class="col-md-6 mb-3">
								<label>Amount</label>
								<input type='number' name='amount' placeholder="Amount" class="form-control" value=''required>				
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label>Payment Mode</label>
								<select class="browser-default custom-select" name="payment" placeholder=" Name" required >
								<option value="">Select</option>
								<option value="Bank">Bank</option>
								<option value="Cash">Cash</option>					
								<option value="Mpesa">Mpesa</option>
								</select>
							</div>
							<div class="col-md-6 mb-3">
								<label>Date </label>
								<input type='date' name='date' placeholder="date" class="form-control" value='' required>				
							</div>
						</div>
					</div>
					<div class="modal-footer">        
						<button type="submit" name='modalamount' class="btn btn-secondary gradient-custom-2"value="submit">Save </button>
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form><!--end of form--> 
			</div>
		</div>
	</div>
<!--end of add deposit-->

<!-- Modal edit deposit -->
	<div class="modal fade" id="editemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-edit"></i> Edit Member </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method='post' action="includes/depositUpdate" enctype="multipart/form-data">
					<div class="modal-body">
						<!--edit deposit-->
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
				</form>
			</div>
		</div>
	</div>
<!--end of edit deposit-->

<!-- Modal view deposit -->
	<div class="modal fade" id="viewdeposit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class='fa fa-eye fa-sm'></i> View Deposit </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <!--View Deposit form-->
				<form method='post' action="includes/update" enctype="multipart/form-data">
					<div class="modal-body">
						<center><h4> </h4></center>
						<div class="form-row">
							<input type="hidden" name="id" id="id" value=""/>
							<input type="hidden" name="hide" id="id" value=""/>
							<div class="col-md-6 mb-3">
								<label>Payment Method</label>
								<input type='text'name='amount' id="amount" placeholder=" Amount" class="form-control" value="" required>				
							</div>
							<div class="col-md-6 mb-3">
								<label>Date</label>
								<input type='text' name='lname' id="payment" placeholder="Payment" class="form-control" value=''required>				
							</div>
						</div>
						<div class="form-row">
							<input type="hidden" name="id" id="id" value=""/>
							<div class="col-md-6 mb-3">
								<label>Member</label>
								<input type='text' name='bookId' id="f_name" placeholder="Name" class="form-control" value="" required>				
							</div>
							<div class="col-md-6 mb-3">
								<label>Amount</label>
								<input type='text' name='bookId' id="amount" placeholder="Amount" class="form-control" value="" required>				
							</div>
						</div>
					</div>
					<div class="modal-footer"> 		
						<button type="button" class="btn btn-secondary gradient-custom-2" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--end of view-->

<!-- Modal delete deposit -->
	<div class="modal fade" id="delemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><center>
					<h5 class="modal-title" id="exampleModalLabel" style="color: #ee7800;"><i class="fa fa-trash-o"></i> Delete </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!--delete deposit form-->
				<form method='post' action="includes/delete" enctype="multipart/form-data">
					<div class="modal-body">
						<center><h4>Do you want to delete deposit?</h4></center>
						<div class="form-row">
							<input type="hidden" name="delete_id" id="delete_id" value=""/>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="depo"class="btn2 btn-primary">Yes</button>
						<button type="button" class="btn2 btn-secondary" data-dismiss="modal">No</button>        
					</div>
				</form><!--end of delete form-->
			</div>
		</div>
	</div>
<!--end of delete deposit-->
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
	
		<script>
			$(document).ready(function(){
				$('.viewbtn').on('click',function(){
					$('#viewdeposit').modal('show');
					
					$tr = $(this).closest('tr');
					
					var data = $tr.children("td").map(function() {
						return $(this).text();
					}).get();
					
					console.log(data);
					
					$('#date').val(data[0]);
					$('#f_name').val(data[1]);
					$('#l_name').val(data[2]);
					$('#amount').val(data[3]);
					$('#payment').val(data[4]);
					
				});
			});
	</script>