  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Version 0.1
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <span id="anio"></span> <a href="https://teamevolve.gg">Team Evolve</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=base_url("assets/")?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url("assets/")?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url("assets/")?>dist/js/adminlte.min.js"></script>
<script>
  var anio = document.getElementById("anio");
  let date = new Date().getFullYear();
  anio.innerHTML = date;
</script>

<!-- DataTables  & Plugins -->
<script src="<?=base_url("assets/")?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url("assets/")?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url("assets/")?>plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<script>
    $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
</script>
</body>
</html>