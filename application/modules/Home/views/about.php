<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>
<!-- ======= about Section ======= -->
<!-- ======= About Us Section ======= -->
<section id="about" class="about mt-5">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>About Us</h2>
        </div>
        <div class="row">
            <!-- List group -->
            <div class="col-md-3">
                <div class="list-group" id="myList" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Siapa Kami</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Kerjasama</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Pekerjaan & karir</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">patner</a>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">...</div>
                    <div class="tab-pane" id="profile" role="tabpanel">oke</div>
                    <div class="tab-pane" id="messages" role="tabpanel">...</div>
                    <div class="tab-pane" id="settings" role="tabpanel">...</div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Us Section -->

<!-- End about Section -->
<?php $this->load->view('layout/footer'); ?>