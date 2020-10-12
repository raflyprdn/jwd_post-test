<?= $this->extend('layouts/vtemplate'); ?>

<?= $this->section('content'); ?>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h1>Selamat Datang <?= $user['username']; ?></h1>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <a href="<?= base_url('kamutube/account_edit'); ?>" class="btn btn-warning">Edit Info Akun</a>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Info Akun</h4>
                <div class="mb-3">
                    <p class="font-weight-bold">Nama</p>
                    <? if(is_null($user['name'])) : ?>
                    <p><?= '-'; ?></p>
                    <? else : ?>
                    <p><?= $user['name']; ?></p>
                    <? endif; ?>
                </div>

                <div class="mb-3">
                    <p class="font-weight-bold">Username</p>
                    <p><?= $user['username']; ?></p>
                </div>

                <div class="mb-3">
                    <p class="font-weight-bold"> Password</p>
                    <p><?= '********' ?></p>
                </div>

                <hr class="mb-4">
                <div class="mb-3">
                    <p class="font-weight-bold">Email</p>
                    <p><?= $user['email']; ?></p>
                </div>

                <div class="mb-3">
                    <p class="font-weight-bold">Telepon</p>
                    <? if(is_null($user['name'])) : ?>
                    <p><?= '-'; ?></p>
                    <? else : ?>
                    <p><?= $user['phone']; ?></p>
                    <? endif; ?>
                </div>
                <hr class="mb-4">
            </div>
        </div>
        <?= $this->endSection(); ?>