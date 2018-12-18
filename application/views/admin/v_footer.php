<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>All Data Reserved @2018 <a href="<?php echo site_url() ?>">Noesantara Studio</a>.</strong> Indonesia yang Terdepan.
  </footer>

</div>
<!-- ./wrapper -->

<script src="<?php echo base_url() ?>assetadmin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assetadmin/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/morris.js/morris.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/fastclick/lib/fastclick.js"></script>
 -->
<script src="<?php echo base_url() ?>assetadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>assetadmin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>assetadmin/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url() ?>assetadmin/dist/js/demo.js"></script>
<script>
  $(function () {

    $('#example1').DataTable({      
      'columnDefs': [
            { width: '7%', targets: 5 },
            { width: '6%', targets: 6 }          
        ]
    })    
    CKEDITOR.replace('editor2')
    $('.textarea').wysihtml5()
    
  })
</script>
</body>
</html>
