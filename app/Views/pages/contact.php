<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- <div class="container-fluid">
    <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Nama Obat
                </th>
                <th class="th-sm">Tanggal Masuk
                </th>
                <th class="th-sm">Tanggal Expired
                </th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Paracetamol</td>
                <td>2 Agustus 2022</td>
                <td>5 April 2024</td>
            </tr>
            <tr>

            </tr>
            <tr>

            </tr>
        </tbody>
</div> -->
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