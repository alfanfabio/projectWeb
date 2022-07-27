<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari obat..">

<div class="container-fluid">
    <div style="margin: 10% 20%;">
        <div style="overflow-y: scroll;">
            <div class="row">
                <div class="col">
                    <h1 class="mt-2">Data Obat</h1>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr class="header">
                                <th scope="col">No.</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Jenis Obat</th>
                                <th scope="col">Jumlah Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>

                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td>Panadol</td>
                                <td>Obat Biasa</td>
                                <td>10 pack (isi 20)</td>
                            </tr>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td>Paracetamol</td>
                                <td>Obat Biasa</td>
                                <td>10 pack (isi 20)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>