<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <!-- <i class="fas fa-gavel"></i> -->
            <a href="<?= site_url('admin') ?>"><?= config_item('web_title'); ?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <!-- <a href="<?= site_url('admin') ?>"><i class="fas fa-gavel"></i></a> -->
        </div>
        <ul class="sidebar-menu">
            <?php if ($user['role_id'] == 1) : ?>
                <li class="menu-header">Admin Menu</li>

                <li><a class="nav-link" href="<?= site_url('admin'); ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-list-alt"></i> <span>Master Edit</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= site_url('portfolio'); ?>">Portfolio</a></li>
                        <li><a class="nav-link" href="<?= site_url('client'); ?>">Client</a></li>
                    </ul>
                </li>
            <?php endif ?>


        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?= base_url(); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-home"></i> Back To Home
            </a>
        </div>
    </aside>
</div>