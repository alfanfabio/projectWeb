<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/logoDinkes.jpg" alt="" width="180" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-link" href="<?= base_url('/pages/obat'); ?>">Daftar Obat</a>
                <a class="nav-link" href="<?= base_url('/pages/expire'); ?>">Data Expire</a>
                <a class="nav-link" href="<?= base_url('/pages/profil'); ?>">Profil</a>
                <a class="nav-link" href="<?= base_url('/pages/tentang'); ?>">Tentang Kami</a>

            </div>
        </div>
    </div>
</nav>