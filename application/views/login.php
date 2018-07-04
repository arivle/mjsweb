        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url();?>assets/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <?php echo $this->session->flashdata('message') ?>
                            <form action="<?php echo site_url('login');?>" method="post">
                                <div class="form-group">
                                    <?php echo form_error('email');?>
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('password');?>
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <?php echo form_checkbox('remember','1',FALSE);?> Remember Me
                                        <!-- <input type="checkbox" name="remember">Remember Me -->
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <center>
                                <a href="#">forgot your password?</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>