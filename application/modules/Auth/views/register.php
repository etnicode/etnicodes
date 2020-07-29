<?php $this->load->view('layout/header'); ?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-10 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register <?= config_item('web_title') ?></h4>
                        </div>

                        <div class="card-body">
                            <form class="user" method="POST" action="<?= site_url('auth/register'); ?>">

                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input id="name" type="text" class="form-control" name="name" autofocus>

                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="text" type="email" class="form-control" name="email" autofocus>

                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password2">
                                    </div>
                                </div>

                                <!-- <div class="form-divider">
                                    Your Home
                                </div> -->


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        <?= config_item('web_footer') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('layout/auth_footer'); ?>