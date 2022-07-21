
<?php $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="/images/UpeoLogo.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are Upeo Chama</h4>
                </div>
                <hr>
                <?php if(session()->get('success')): ?>
                  <div class="alert alert-success" role="alert"> 
                  <?=session()->get('success') ?>
                  </div>
                <?php endif  ?>

                <form action="/" method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input class="form-control" type="email" name="email" id="email" 
                      placeholder="email address" value="<?= set_value('email') ?>"/>
                    <label class="form-label" for="email">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input class="form-control" type="password" name="password" id="password" value="" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <?php  if(isset($validation)): ?>
                    <div class="text-center pt-1 mb-5 pb-1">  
                    <div class="alert alert-danger" role="alert">  
                      <?= $validation->listErrors() ?>
                    </div>
                    </div>
                  <?php endif; ?>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                   <!-- <a class="text-muted" href="#!">Forgot password?</a>-->
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>&nbsp
                    <a href="/register"> <button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h3 class="mb-4"><b>We are more than just a chama</b></h3>
                <p class="small mb-3">We are friends who came together and became
                a family. Ever since then growing together has been our goal and we have been living to that goal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection() ?>


