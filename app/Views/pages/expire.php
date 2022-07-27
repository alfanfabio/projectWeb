<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="col">
    <form class="example center" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

</div>

<div class="container-fluid">

    <div style="overflow-y: scroll;">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Daftar Expire</h1>
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