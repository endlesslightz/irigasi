<?php echo $this->extend('template/template'); ?>


<?php echo $this->section('kontainer'); ?>

<!-- Main Content -->
<section class="content-wrap pos">

    <div class="row sortable">
        <!-- Weather -->
        <div class="col l4 s12">
            <div class="card">
                <div class="title">
                    <h5>CCTV</h5>
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">
                    <img src="/upload/<?= $cctv ?>" alt="" class="cctv">
                    &nbsp;
                    <h5>Waktu screenshot : <?= date('Y-m-d H:i:s', $waktu) ?></h5>
                </div>
            </div>
            <div class="card">
                <div class="title">
                    <h5>Tabulasi</h5>
                    <!-- <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a> -->
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">

                </div>
            </div>
        </div>
        <div class="col l8 s12">
            <div class="card">
                <div class="title">
                    <h5>Peta Lokasi</h5>
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">

                </div>
            </div>
        </div>
        <!-- /Weather -->

    </div>
</section>
<!-- /Main Content -->

<?php echo $this->endSection(); ?>