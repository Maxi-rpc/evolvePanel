 <!-- Main Footer -->
 <footer class="main-footer bg-dark">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          <a href="https://github.com/Maxi-rpc?tab=repositories">By Max</a>
        </div>
        <!-- Default to the left -->
        <strong
          >Copyright &copy; 2020
          <a href="https://teamevolve.gg">Maycam Evolve</a>.</strong
        >
        All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/js/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>

    <!-- DataTables -->
    <script src="<?= base_url() ?>assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
  $(function () {
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

  </body>
</html>