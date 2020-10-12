<?= $this->extend('layouts/vtemplate'); ?>

<?= $this->section('content'); ?>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h1>Selamat Datang <?= $user['username']; ?></h1>
        </div>

        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Info Akun</h4>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="address">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $user['username']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="********">
                    </div>

                    <hr class="mb-4">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $user['email']; ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="address2">Telepon</label>
                        <input type="text" class="form-control" name="phone" value="<?= $user['phone']; ?>">
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
                </form>
            </div>
        </div>
        <?= $this->endSection(); ?>