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
							<center><h1 style="color:#ee7800;"><span class="fa fa-bar-chart fa-md"></span> Deposit Report </h1></center>
							<hr>									
							<div class="form-row">
								<div class="col-md-6 mb-3">
								<form method="post" action="pdf/report_depositReportPdf" target="_blank">
									<h5><b>SELECT DATE </br><br>FROM</b></h5>	
										<input type='date' name='f_date' placeholder="Date" class="form-control" value=''required>				
									</div>
									<div class="col-md-6 mb-3">
										<h5><b></br></br>To</b></h5>
										<input type='date' name='t_date' placeholder="To Date" class="form-control" value=''required>				
									</div>
									<button type="submit" class="btn btn-secondary gradient-custom-2" name="totaldepo"><center><b>SUBMIT</b></center></button>
								</form>
							</div>
						</div><hr><hr></br>

						<!--report part two-->
						<div class="content">
							<center><h1 style="color:#ee7800;"><span class="fa fa-pie-chart fa-md"></span> Loan Report </h1></center>
							<hr>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<form method="post" action="pdf/report_loanReportPdf" target="_blank">
										<h5><b>SELECT DATE </br><br>FROM</b></h5>	
										<input type='date' name='f_date' placeholder="Date" class="form-control" value=''required>				
								</div>
									<div class="col-md-6 mb-3">
										<h5><b></br></br>To</b></h5>
										<input type='date' name='t_date' placeholder="To Date" class="form-control" value=''required>				
									</div>
										<button type="submit" class="btn btn-secondary gradient-custom-2" name="loan"><center><b>SUBMIT</b></center></button>
								</form>
							</div>	
						</div><hr><hr></br>
						<!-- end of report part two-->
											
						<!--report part three-->
						<div class="content">
							<center><h1 style="color:#ee7800;"><span class="fa fa-pie-chart fa-md"></span> Balance Sheet Report </h1></center>
							<hr>										
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<form method="post" action="pdf/report_balancesheetPdf" target="_blank">
										<h5><b>SELECT DATE </br><br>FROM</b></h5>	
										<input type='date' name='f_date' placeholder="Date" class="form-control" value=''required>				
									</div>
									<div class="col-md-6 mb-3">
										<h5><b></br></br>To</b></h5>
										<input type='date' name='t_date' placeholder="To Date" class="form-control" value=''required>				
									</div>
									<button type="submit" class="btn btn-secondary gradient-custom-2" name="balance"><center><b>SUBMIT</b></center></button>
								</form>
							</div>	
						</div><hr><hr>
						<!-- end of report part three-->
											
						<!--report part four-->
						<div class="content">
							<center><h1 style="color:#ee7800;"><span class="fa fa-pie-chart fa-md"></span> Profit And Loss Report </h1></center>
							<hr>					
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<form method="post" action="pdf/report_profitlossPdf" target="_blank">
										<h5><b>SELECT DATE </br><br>FROM</b></h5>	
										<input type='date' name='f_date' placeholder="Date" class="form-control" value=''required>				
								</div>
									<div class="col-md-6 mb-3">
										<h5><b></br></br>To</b></h5>
										<input type='date' name='t_date' placeholder="To Date" class="form-control" value=''required>				
									</div>
									<button type="submit" class="btn btn-secondary gradient-custom-2" name="profit"><center><b>SUBMIT</b></center></button>
								</form>
							</div>
						</div><hr><hr>
						<!-- end of report part four-->
					</div>
				</div>
				<div></div>
			</div>					
		</div>
	</section>
	