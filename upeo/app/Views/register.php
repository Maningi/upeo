<?php $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="card-body p-md-5 mx-md-12 align-items-center">
					<div class="text-center">
						<img src="/images/UpeoLogo.png"
							style="width: 185px;" alt="logo">
						<h4 class="mt-1 mb-5 pb-1">We are Upeo Chama <br>Register</h4>
					</div>
				<hr>
				<form action="/register" method="post">
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
								</div>
							</div>

							<div class="col-12 col-sm-6">
								<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" value="">
								</div>
							</div>
							<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="password_confirm">Confirm Password</label>
								<input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
								</div>
							</div>
							<?php  if(isset($validation)): ?>
								<div class="col-12">  
								<div class="alert alert-danger" role="alert">  
									<?= $validation->listErrors() ?>
								</div>
								</div>
								<?php endif  ?>  
						</div>
						   

						<div class="row">
						<div class="col-12 col-sm-4">
						<button type="submit" class="btn btn-primary gradient-custom-2 mb-3">Register</button>
						</div>
						<div class="col-12 col-sm-8 text-right ">
							<a href="/" style="color:#ee7724;">Already Have an account?</a>
						 </div>
						
					</form>
				</div>				
			</div>
	      </div>	
		</div>	
       </div>	
	</div>	
</div>	
<?= $this->endSection() ?>                 