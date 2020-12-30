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

    <!-- Toastr -->
    <script src="<?= base_url() ?>assets/js/toastr/toastr.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>assets/js/sweetalert2/sweetalert2.min.js"></script>

    <script>
  $(function () {
    $("#dataTable").DataTable({
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

<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Se creo con exito.')
    });

  });
</script>

  </body>
</html>