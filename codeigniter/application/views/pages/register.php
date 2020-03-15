<body class="bg-gradient-success">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('admin/registerUser');?>">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('registerFirstName');?>" name="registerFirstName" id="exampleFirstName" placeholder="First Name">
                    <?php echo form_error('registerFirstName',"<p class='text-center text-danger mt-2' style='font-size: 12px;'>","</p>");?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('registerLastName');?>" name="registerLastName" id="exampleLastName" placeholder="Last Name">
                    <?php echo form_error('registerLastName',"<p class='text-center text-danger mt-2' style='font-size: 12px;'>","</p>");?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" value="<?php echo set_value('registerEmail');?>" name="registerEmail" id="exampleInputEmail" placeholder="Email Address">
                  <?php echo form_error('registerEmail',"<p class='text-center text-danger mt-2' style='font-size: 12px;'>","</p>");?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" value="<?php echo set_value('registerPassword');?>" name="registerPassword" id="exampleInputPassword" placeholder="Password">
                    <?php echo form_error('registerPassword',"<p class='text-center text-danger mt-2' style='font-size: 12px;'>","</p>");?>
                    <?php 
                        if($this->uri->segment(3) == '')
                        {

                        }else if($this->uri->segment(3) == 'passwordNotMatch')
                        {
                          ?>
                            <p class="text-center text-danger mt-2" style="font-size: 12px;"> Maaf password tidak sama. </p>
                          <?php
                        }
                    ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" value="<?php echo set_value('registerRepeatPassword');?>" name="registerRepeatPassword" id="exampleRepeatPassword" placeholder="Repeat Password">
                    <?php echo form_error('registerRepeatPassword',"<p class='text-center text-danger mt-2' style='font-size: 12px;'>","</p>");?>
                    <?php 
                        if($this->uri->segment(3) == '')
                        {
                          
                        }else if($this->uri->segment(3) == 'passwordNotMatch')
                        {
                          ?>
                            <p class="text-center text-danger mt-2" style="font-size: 12px;"> Maaf password tidak sama. </p>
                          <?php
                        }
                    ?>
                  </div>
                </div>
                <input type="submit" value="Register" class="btn btn-success btn-user btn-block" name="registerSubmit">
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('admin/');?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>