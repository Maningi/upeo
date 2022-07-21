<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="card-body p-md-5 mx-md-12 align-items-center">
					<div class="text-center">
						<img src="/images/UpeoLogo.png"
							style="width: 105px;" alt="logo">
						<h4 class="mt-1 mb-5 pb-1"><b>Update Your Profile</b></h4>
					</div>
			
					<!--<h3><?= $user['firstname'].' '.$user['lastname'] ?></h3>-->
					<hr>
                    <?php if(session()->get('success')): ?>
                    <div class="alert alert-success" role="alert"> 
                    <?=session()->get('success') ?>
                    </div>
                    <?php endif  ?>

					<form action="/profile" method="post">
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname', $user['firstname']) ?>">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname', $user['lastname']) ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="text" class="form-control" readonly id="email" value="<?= $user['email'] ?>">
								</div>
							</div>

							<div class="col-12 col-sm-6">
								<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" value="<?= $user['password'] ?>">
								</div>
							</div>
							<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="password_confirm">Confirm Password</label>
								<input type="password" class="form-control" name="password_confirm" id="password_confirm" value="<?= $user['password'] ?>">
								</div>
							</div>
							<?php  if(isset($validation)): ?>
								<div class="col-12">  
								<div class="alert alert-danger" role="alert">  
									<?= $validation->listErrors() ?>
								</div>
								</div>
							<?php endif; ?>   
						</div>
						   

						<div class="row">
						<div class="col-12 col-sm-4">
						<button type="submit" class="btn btn-primary gradient-custom-2">Update</button>
						</div>

						
					</form>
				</div>	
				</div>
			</div>
		</div>
	</div>
                   