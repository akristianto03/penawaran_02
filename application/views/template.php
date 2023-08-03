<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/PINK LOGO-01.png">
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>assets/export/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/export/buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view($header); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- <div class="px-2 bg-light"><marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" style="color:black;font-size:20px;font-style:bold;font-family:times new roman">
                URUTAN DEAL PENAWARAN MARKETING TERBANYAK BULAN NOVEMBER => <i style="color:red;">
                <?php
                $no = 1;
                foreach ($klasemen  as $row) : ?>
                    <?= $no++ ?>.
                    <?= $row->marketing  ?> (<?= $row->total ?>)&nbsp;&nbsp;&nbsp;&nbsp;,
                <?php endforeach; ?>
                </i>
            </marquee></div> -->
            <?php $this->load->view($body); ?>
            <?php $this->load->view($footer); ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Export Data -->
    <script src="<?= base_url() ?>assets/export/jquery-2.1.4.js"></script>
    <script src="<?= base_url() ?>assets/export/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/export/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/export/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/export/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/export/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/export/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/export/buttons.print.min.js"></script>



    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
        $('#alat').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#aspal').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#marka').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#pancang').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#panel').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#readymix').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#sheet_pile').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#stensla').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#uditch').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#paving').dataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });

        // DASHBOARD ADMIN
        $(document).ready(function() {
            $('#example').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_selvy').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_harris').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_yoshua').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_nanang').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_adhitya').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_taufik').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_syamsul').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_zainul').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_teryluana').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_indra').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_andri').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_yancesetio').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_candra5758').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_Nico').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_Agung').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable_Mohamad').DataTable();
        });
    </script>
</body>

</html>