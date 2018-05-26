<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Desenvolvido por Thiago Moura
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="http://fasortec.com.br" target="_blank">Equipe de TI</a>.</strong> Todos os direitos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/res/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/res/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/res/admin/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script src="/res/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="/res/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/res/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/res/admin/dist/js/demo.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    $("#users").DataTable({
      "language": {
                    "zeroRecords": "Ramal ou Setor não encontrado",
                    "info": "Exibindo página _PAGE_ de _PAGES_",
                    "infoEmpty": "-",
                    "infoFiltered": "",
                    "search": "Pesquisar",
                    "paginate": {
                        "next": "Próximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "Último"
                    }

                 }
    });
  });
</script>

</body>
</html>