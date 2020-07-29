<!-- Main Content -->
<?php $this->load->view('layout/adm/header'); ?>
<?php $this->load->view('layout/adm/navbar'); ?>
<?php $this->load->view('layout/adm/sidebar'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>

        <div class="section-body">



            <div class="card" id="mycard-dimiss">
                <div class="card-header">
                    <h4>Dismiss</h4>
                    <!-- card dismiss toggle -->
                    <div class="card-header-action">
                        <a data-dismiss="#mycard-dimiss" class="btn btn-icon"><i class="ion ion-close"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    You can dimiss this card.
                </div>
                <div class="card-footer">
                    Card Footer
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('layout/adm/footer'); ?>