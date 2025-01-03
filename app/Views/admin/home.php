<?= $this->extend('admin/template/admin_template') ?>
<link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
<?= $this->section('content') ?>
<div class="title pb-20">
    <h2 class="h3 mb-0">Vue Générale de Performance</h2>
</div>

<div class="row pb-10">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">75</div>
                    <div class="font-14 text-secondary weight-500">
                        Appointment
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#00eccf">
                        <i class="icon-copy dw dw-calendar1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">124,551</div>
                    <div class="font-14 text-secondary weight-500">
                        Total Patient
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#ff5b5b">
                        <span class="icon-copy ti-heart"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">400+</div>
                    <div class="font-14 text-secondary weight-500">
                        Total Doctor
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon">
                        <i
                            class="icon-copy fa fa-stethoscope"
                            aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">$50,000</div>
                    <div class="font-14 text-secondary weight-500">Earning</div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#09cc06">
                        <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row pb-10">
    <div class="col-md-8 mb-20">
        <div class="card-box height-100-p pd-20">
            <div
                class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
                <div class="h5 mb-md-0">Hospital Activities</div>
                <div class="form-group mb-md-0">
                    <select class="form-control form-control-sm selectpicker">
                        <option value="">Last Week</option>
                        <option value="">Last Month</option>
                        <option value="">Last 6 Month</option>
                        <option value="">Last 1 year</option>
                    </select>
                </div>
            </div>
            <div id="activities-chart"></div>
        </div>
    </div>
    <div class="col-md-4 mb-20">
        <div
            class="card-box min-height-200px pd-20 mb-20"
            data-bgcolor="#455a64">
            <div class="d-flex justify-content-between pb-20 text-white">
                <div class="icon h1 text-white">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                </div>
                <div class="font-14 text-right">
                    <div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
                    <div class="font-12">Que le mois dernier</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div class="text-white">
                    <div class="font-14">Ventes</div>
                    <div class="font-24 weight-500">1865</div>
                </div>
                <div class="max-width-150">
                    <div id="appointment-chart"></div>
                </div>
            </div>
        </div>
        <div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
            <div class="d-flex justify-content-between pb-20 text-white">
                <div class="icon h1 text-white">
                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                </div>
                <div class="font-14 text-right">
                    <div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
                    <div class="font-12">Que le mois dernier</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div class="text-white">
                    <div class="font-14">Revenu</div>
                    <div class="font-24 weight-500">250</div>
                </div>
                <div class="max-width-150">
                    <div id="surgery-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>
<script
    src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
    crossorigin="anonymous"></script>
<script src="<?= base_url('vendors/scripts/Menu.js') ?>"></script>
<?= $this->section('javascript') ?>
<?php if (session()->getFlashdata('menu')) : ?>
    <script>
        // Récupérer le menu JSON depuis les données flash
        const menu = <?= session()->getFlashdata('menu'); ?>;

        // Stocker le menu dans localStorage
        localStorage.setItem('userMenu', JSON.stringify(menu));

        console.log('Menu stocké dans localStorage:', menu);
    </script>
<?php endif; ?>
<script>
    initMenu()
</script>
<?= $this->endSection() ?>

<?= $this->endSection() ?>