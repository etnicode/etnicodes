<!-- Main Content -->
<?php $this->load->view('layout/adm/header'); ?>
<?php $this->load->view('layout/adm/navbar'); ?>
<?php $this->load->view('layout/adm/sidebar'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Judul</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-primary addMenuButton" data-toggle="modal" data-target="#PortfolioModal">
                            <i class="fas fa-plus"></i> Tambah Tabungan
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="tbn">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            NO
                                        </th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th>Link</th>
                                        <th>Filter</th>
                                        <th>Action</>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($portfolio)) : ?>
                                        <td colspan="5">
                                            Data Kosong.
                                        </td>
                                    <?php endif; ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($portfolio as $p) : ?>
                                        <tr>
                                            <th class="text-center"><?= $i; ?></th>
                                            <td><?= $p['nama']; ?></td>
                                            <td><img src="<?= base_url('./upload/portfolio/') . $p['image']; ?>" width="50px"></td>
                                            <td><?= $p['link']; ?></td>
                                            <td><?= $p['filter']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/editportofolio/<?= $p['id']; ?>" class="btn btn-primary showModalPortfolio" data-toggle="modal" data-target="#PortfolioModal" data-id="<?= $p['id']; ?>">Edit</a>
                                                <a href="<?= base_url(); ?>admin/portfolio/delete/<?= $p['id']; ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
        </div>
    </section>
</div>
<?php $this->load->view('layout/adm/footer'); ?>

<!-- Modal -->
<div class="modal fade" id="PortfolioModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="PortfolioModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="PortfolioModalLabel">Tambah Data Portfolio</h5>
            </div>
            <?= form_open_multipart('admin/portfolio/addportfolio'); ?>
            <div class="modal-body">
                <input type="hidden" class="form-control" id="id" name="id">
                <div class="form-group">
                    <label for="jenis_tabungan">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="jenis_tabungan">Link</label>
                    <input type="text" class="form-control" id="link" name="link">
                </div>
                <div class="form-group">
                    <select name="filter" class="form-control" required>
                        <option value="">Select Filter</option>
                        <option value="wordpress">Wordpress</option>
                        <option value="desain">Desain</option>
                        <option value="seo">Seo</option>
                        <option value="customweb">Custom Web</option>
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" required>
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>

            </div>
            <hr>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>