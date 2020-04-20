<!DOCTYPE html>
<html>
<head>
  <title>Export Data</title>
  <link rel="icon" href="<?=base_url()?>assets/dist/img/ptrum.png">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.dataTables.min.css') ?>">
</head>
<body>

  <div class="card">
    <div class="card-header">
      <a href="<?= site_url() ?>"><button>Lihat Chart</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="table-responsive">
        <table id="tablesrv" class="table table-bordered table-striped">
          <thead>
          <tr class="text-center">
            <th>NO</th>
            <th>ID STATION</th>
            <th>TIME</th>
            <th>H2S [μg]</th>
            <th>CS2 [μg]</th>
            <th>H2S [ppm]</th>
            <th>CS2 [ppm]</th>
            <th>WS</th>
            <th>WD</th>
            <th>HUMIDITY</th>
            <th>TEMPERATURE</th>
            <th>PRESSURE</th>
            <th>SR</th>
            <th>RAIN INTENSITY</th>
          </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>


  <script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/jszip.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/pdfmake.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>

  <script>
    $(document).ready(function() {
      $('#tablesrv').DataTable({
        "processing": true,
        "serverSide": true,
		"lengthMenu": [ [10, 25, 50, 100, 200, 300, 500, -1], [10, 25, 50, 100, 200, 300, 500, "All"] ],
        "ajax": {
          "url" : "http://ispumaps.id/restserverclientskh/ajax/get_ajax",
          "type" : "POST"
        },
		dom: "lBfrtip",
		buttons: ['excel'],
		"order": [ [2, "desc"]],
    "columnDefs" : [
          {
            "targets" : [5, 6, 7, 8, 9, 10, 11, 12, 13],
            "orderable" : false
          }
        ]
      })
    })
  </script>

</body>
</html>