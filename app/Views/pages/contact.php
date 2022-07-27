<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
    }
</style>
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
    <?= $this->endSection(); ?>