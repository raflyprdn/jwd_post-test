<?= $this->extend('layouts/vtemplate'); ?>

<?= $this->section('content'); ?>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h1>Selamat Datang User</h1>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <a href="<?= base_url('kamutube/account_edit'); ?>" class="btn btn-secondary">Edit Biodata Akun</a>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Info Akun</h4>
                <div class="mb-3">
                    <p class="font-weight-bold">Nama</p>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <p class="font-weight-bold">Email</p>
                </div>

                <div class="mb-3">
                    <p class="font-weight-bold">Username</p>
                </div>

                <div class="mb-3">
                    <p class="font-weight-bold"> Password</p>
                </div>

                <div class="mb-3">
                    <p class="font-weight-bold">Status</p>
                    <p>Aktif</p>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>