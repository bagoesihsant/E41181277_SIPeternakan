<div class="container-fluid p-2">
    <h1 class="text-center mb-4"> Selamat Datang di Aplikasi kami </h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto bg-light p-2">
                <h3 class="text-black text-center mb-4"> Sign In </h3>
                <div class="container">                    
                    <form action="<?php echo base_url('Admin/cek_login');?>" method="post">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <input type="submit" value="Login" name="login" id="login" class="btn btn-primary p-2 w-100">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <input type="submit" value="Register" name="register" id="register" class="btn btn-outline-success p-2 w-100">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>