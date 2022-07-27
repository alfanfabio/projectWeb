<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Data Obat</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Tanggal Expired</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>

                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>Panadol</td>
                            <td>2 Agustus 2022</td>
                            <td>4 April 2023</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>