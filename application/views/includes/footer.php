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
</body>
</html>