<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form class="example center" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>