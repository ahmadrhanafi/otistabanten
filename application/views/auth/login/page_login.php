<style type="text/css">
    .login-page {
        background-image: url('https://unsplash.com/id/foto/fotografi-panorama-pegunungan-kKvQJ6rK6S4');
        background-color: #FFFDD0;
        background-size: cover;

    }

    .loginnich {
        background-color: #000;
        border-color: #000;
    }
</style>
<div class="login-box">
    <div class="login-logo" style="margin-left: 10%;">
        <a href="<?php echo base_url('auth'); ?>">

            <img class="img-logo-text" src="<?php echo base_url('assets/dist/img/logo_barberbos.png') ?>"
                style="transform: translate(-2%, -10%); width:300px;">
        </a>
        <!--      <p
            style="font-size: 35%; font-family: Helvetica; transform: translate(2%, -100%); color: #d849f5; font-weight: bold;">
            ADMINISTRATOR
        </p> -->
    </div>
    <!-- /.login-logo -->
    <div class="card shadow" style="margin-left: 11%;">
        <div class="card-body login-card-body rounded-circle">
            <p class="login-box-msg">Cashier Sign In</p>
            <?php echo $this->session->flashdata('message'); ?>
            <form action="<?php echo base_url('Auth/login'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off"
                        required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block loginnich">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>