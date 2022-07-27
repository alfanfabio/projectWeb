<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Nama Obat
            </th>
            <th class="th-sm">Jenis Obat
            </th>
            <th class="th-sm">Jumlah Obat
            </th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Paracetamol</td>
            <td>Obat Biasa</td>
            <td>5 pack(isi 10)</td>
            <?= $this->endSection(); ?>