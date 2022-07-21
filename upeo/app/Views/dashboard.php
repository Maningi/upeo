<?php
    $uri = service('uri');
  ?>

<section>
		<div class="row">
		<?= view_cell('\App\Libraries\Navbar::navItem') ?>
	<div class="col-md-9">
		<div class="container">
						<div class="card-deck">
					   <div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(11, 10, 0, 0.9); color:#ffffff;"><h5 class="card-title"><b><center><i class="fa fa-line-chart fa-sm"></i> Active Loans</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><?php ?></center></b></h5>
						  <h4 class="card-text"><b><?php  ?></b></h4></center>
						  
						</div>
					  </div>
					  
					  <div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(215, 186, 69, 1); color:#ffffff;"><h5 class="card-title"><b><center><i class="fa fa-money fa-sm"></i> Cash Available</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><?php ?></center></b></h5>
						  <h4 class="card-text"><b><?php  ?></b></h4></center>
						  
						</div>
					  </div>
					  
					   <div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(215, 186, 69, 1); color:#ffffff;"><h5 class="card-title"><b><center> <i class="fa fa-money" aria-hidden="true"></i> Total Deposit</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><?php ?></center></b></h5>
						  <h4 class="card-text"><b><?php  ?></b></h4></center>
						  
						</div>
					  </div>
					
					<div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(0, 0, 0, 0.4); color:#ffffff;"><h5 class="card-title"><b><center><i class="fa fa-usd" aria-hidden="true"></i> Interest</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><?php ?></center></b></h5>
						  <h4 class="card-text"><b><?php  ?></b></h4></center>
						  
						</div>
					  </div>
					
						</div>	</br>

					<div class="card">
					<div class="card-header"style=" background-color: rgba(112, 130, 56, 1); color:#ffffff;"><h5 class="card-title"><b>Due Loans </b></h5></div>
						<div class="card-body">								
						<small class="text-muted">								
						<table  class="table  table-hover " >
						<thead bgcolor="" class="">
							<tr>
								<th></th>
								<th>Name</th>
								<th>Phone</th>
								<th>Loan</th>
								<th>Due Amount</th>
								<th>Due Date</th>
							</tr>
						
						
						</thead>
							<?php 								
					
						?>
						</table>
						<hr>
							<p><a href="pdf/loanReportPdf" target="_blank"><i class="fa fa-cloud-download fa-sm" style="color:black;"></i> Download Full Active Loan Report</a></p>
						</small>
					  </div>
					</div></br>
					<!--small dashboards-->
					
					
					<div class="card-deck">
					   <div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(11, 10, 0, 0.9); color:#ffffff;"><h5 class="card-title"><b><center><i class="fa fa-money fa-sm"></i> Loan Balance</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><?php ?></center></b></h5>
						  
						  
						</div>
					  </div>
					  
					  <div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(215, 186, 69, 1); color:#ffffff;"><h5 class="card-title"><b><center><i class="fa fa-money fa-sm"></i> Other Income</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><?php  ?></center></b></h5>
						  
						  
						</div>
					  </div>
					  
					   <div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(215, 186, 69, 1); color:#ffffff;"><h5 class="card-title"><b><center><i class="fa fa-plane" aria-hidden="true"></i> Expenses</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><??></center></b></h5>
						  <h4 class="card-text"><b><?php  ?></b></h4></center>
						  
						</div>
					  </div>
					
					<div class="card" style="height:120px;">
					   <div class="card-header"style=" background-color: rgba(0, 0, 0, 0.4); color:#ffffff;"><h5 class="card-title"><b><center><i class="fa fa-pie-chart" aria-hidden="true"></i> Share Capital</center></b></h5></div>
						<div class="card-body" style="height:125px;"><center>
						  <h5 class="card-title"><b><center><?php ?></center></b></h5>
						  <h4 class="card-text"><b><?php  ?></b></h4></center>
						  
						</div>
					  </div>
					
						</div>
						
					
				</div></br></br>
				</div>
		</div>
	</section></br></br>