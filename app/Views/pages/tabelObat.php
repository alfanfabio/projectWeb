<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Name
            </th>
            <th class="th-sm">Position
            </th>
            <th class="th-sm">Office
            </th>
            <th class="th-sm">Age
            </th>
            <th class="th-sm">Start date
            </th>
            <th class="th-sm">Salary
            </th>
        </tr>
    </thead>
    <?= $this->endSection(); ?>