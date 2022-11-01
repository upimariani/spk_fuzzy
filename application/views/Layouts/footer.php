</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/demo.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>asset/chart/dist/Chart.min.js"></script>
<script src="<?= base_url() ?>asset/chart/samples/utils.js"></script>
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Date range picker
    $('#reservationdate').datetimepicker({
      format: 'YYYY-MM-DD'
    });
  })
</script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  console.log = function() {}
  $("#balita").on('change', function() {

    $(".nama").html($(this).find(':selected').attr('data-nama'));
    $(".nama").val($(this).find(':selected').attr('data-nama'));

    $(".alamat").html($(this).find(':selected').attr('data-alamat'));
    $(".alamat").val($(this).find(':selected').attr('data-alamat'));

    $(".ayah").html($(this).find(':selected').attr('data-ayah'));
    $(".ayah").val($(this).find(':selected').attr('data-ayah'));

    $(".ibu").html($(this).find(':selected').attr('data-ibu'));
    $(".ibu").val($(this).find(':selected').attr('data-ibu'));

    $(".jk").html($(this).find(':selected').attr('data-jk'));
    $(".jk").val($(this).find(':selected').attr('data-jk'));

    $(".tgl").html($(this).find(':selected').attr('data-tgl'));
    $(".tgl").val($(this).find(':selected').attr('data-tgl'));

  });
</script>
<script>
  <?php
  foreach ($grafik_status_gizi as $key => $all) {
    $status_gizi_all[] = $all->status_gizi;
    $total_all[] = $all->jml;
  }
  ?>
  var ctx = document.getElementById('grafik_all');
  var grafik = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($status_gizi_all) ?>,
      datasets: [{
        label: 'Grafik Jumlah Status Gizi Perbulan',
        data: <?= json_encode($total_all) ?>,
        backgroundColor: [
          'rgba(255, 99, 132, 0.80)',
          'rgba(54, 162, 235, 0.80)',
          'rgba(255, 206, 86, 0.80)',
          'rgba(75, 192, 192, 0.80)',
          'rgba(153, 102, 255, 0.80)',
          'rgba(255, 159, 64, 0.80)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)',
          'rgba(255, 99, 132, 0.80)',
          'rgba(54, 162, 235, 0.80)',
          'rgba(255, 206, 86, 0.80)',
          'rgba(75, 192, 192, 0.80)',
          'rgba(153, 102, 255, 0.80)',
          'rgba(255, 159, 64, 0.80)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)'
        ],
        fill: false,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>
<script>
  <?php
  foreach ($grafik_status_gizi as $key => $value) {
    $status_gizi[] = $value->status_gizi;
    $total[] = $value->jml;
  }
  ?>
  var ctx = document.getElementById('grafik');
  var grafik = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($status_gizi) ?>,
      datasets: [{
        label: 'Grafik Jumlah Status Gizi Perbulan',
        data: <?= json_encode($total) ?>,
        backgroundColor: [
          'rgba(255, 99, 132, 0.80)',
          'rgba(54, 162, 235, 0.80)',
          'rgba(255, 206, 86, 0.80)',
          'rgba(75, 192, 192, 0.80)',
          'rgba(153, 102, 255, 0.80)',
          'rgba(255, 159, 64, 0.80)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)',
          'rgba(255, 99, 132, 0.80)',
          'rgba(54, 162, 235, 0.80)',
          'rgba(255, 206, 86, 0.80)',
          'rgba(75, 192, 192, 0.80)',
          'rgba(153, 102, 255, 0.80)',
          'rgba(255, 159, 64, 0.80)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(201, 76, 76, 0.3)',
          'rgba(201, 77, 77, 1)',
          'rgba(0, 140, 162, 1)',
          'rgba(158, 109, 8, 1)',
          'rgba(201, 76, 76, 0.8)',
          'rgba(0, 129, 212, 1)',
          'rgba(201, 77, 201, 1)',
          'rgba(255, 207, 207, 1)',
          'rgba(201, 77, 77, 1)',
          'rgba(128, 98, 98, 1)',
          'rgba(0, 0, 0, 1)',
          'rgba(128, 128, 128, 1)'
        ],
        fill: false,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>
</body>

</html>