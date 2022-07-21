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
							<center><h1 style="color:#ee7800;"><span class="fa fa-line-chart fa-md"></span> Loans-Active </h1></center>
								<hr></br></br>
							<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text" id="btnGroupAddon2" id="add_button" data-toggle="modal" data-target="#userModal" ><span class="fa fa-search fa-md"></span></div>
									</div>
									<form class="form-inline my-2 my-lg-0" method="POST" action="search/searchLoanActive">
										<input type="text" class="form-control" name="search" placeholder="Search" aria-label="Input group example" aria-describedby="btnGroupAddon2">
										&nbsp <button class="btn btn-secondary gradient-custom-2" type="submit" name="submit"> Search</button>
									</form>
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
										<th>Member</th>
										<th>Amount</th>										
										<th>Interest</th>
										<th>Bank Charges</th>
										<th>Balance</th>
										<th>Applied Date</th>															
										<th>Due date</th>										
									</tr>
								</thead>
							</table>	
							<ul class="pagination">							
								<li>
									<a href="?pageno=1"><button type="button" class="btn btn-secondary gradient-custom-2">Pg 1</button></a>
								</li>&nbsp
								<li class="<?php  ?>">
									<a href="<?php  ?>"><button type="button" class="btn btn-secondary gradient-custom-2"><i class="fa fa-backward fa-sm"></i> Prev</button></a>
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