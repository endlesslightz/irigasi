<?php echo $this->extend('template/template'); ?>


<?php echo $this->section('kontainer'); ?>

<!-- Main Content -->
<section class="content-wrap pos">

    <div class="row sortable">
        <!-- Weather -->
        <div class="col l4 s12">
            <div class="card">
                <div class="title">
                    <h5>Tabel</h5>
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
                    <h5>Grafik</h5>
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