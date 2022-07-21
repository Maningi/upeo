<?php
	$uri = service('uri');
?>
   <div class="col-md-3">
		<div class="container-fluid ">
			<div class="list-group">
				<a href="/dashboard" id="main-color-bg" class="list-group-item list-group-item-action  <?php if($uri->getSegment(1) == 'dashboard'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'dashboard'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-dashboard fa-sm"></i> Dashboard<hr></a> 
				<a href="members" class="list-group-item list-group-item-action  <?php if($uri->getSegment(1) == 'members'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'members'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-users fa-sm"></i>  Members</a>
				<a href="/usersRoles" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'usersRoles'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'usersRoles'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-cogs fa-sm"></i>  Users & Roles<hr></a>
				<a href="/deposit" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'deposit'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'deposit'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-money fa-sm"></i>  Deposit</a>
				<a href="/otherIncome"  class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'otherIncome'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'otherIncome'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-money fa-sm"></i>  Other Income <hr></a>
				<a href="/loan" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'loan'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'loan'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-calculator fa-sm"></i>  Loan </a>
				<a href="/loanActive" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'loanActive'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'loanActive'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-line-chart fa-sm"></i>  Loans-Active </a>
				<a href="/loanRecord" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'loanRecord'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'loanRecord'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-list-alt fa-sm"></i>  Loans Paid <hr> </a>
				<a href="/expense" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'expense'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'expense'){echo "style='color:#ffffff;'";}?>">
					<i class="fa fa-credit-card fa-sm"></i>  Expenses<hr> </a>
				<a href="sharesReport" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'sharesReport'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'sharesReport'){echo "style='color:#ffffff;'";}?>">
						<i class="fa fa-pie-chart fa-sm"></i> Shares Report</a>
				<a href="/report" class="list-group-item list-group-item-action <?php if($uri->getSegment(1) == 'report'){ echo 'gradient-custom-2';} ?>"
				<?php if($uri->getSegment(1) == 'report'){echo "style='color:#ffffff;'";}?>">
						<i class="fa fa-bar-chart fa-sm"></i>  Report<hr> </a>
				<a href="/logout" class="list-group-item list-group-item-action ">
					<i class="fa fa-power-off fa-sm"></i> Logout </a>
				</div>
			</div>
		</div>
	<br><br>
					  