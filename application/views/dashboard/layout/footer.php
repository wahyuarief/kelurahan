<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/textboxio/textboxio.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/datatables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pace.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/dist/sweetalert.min.js') ?>"></script>
<script>
jQuery(document).ready(function($){
      $('.btn-danger').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Delete Data',
                  text: 'Yakin Ingin Anda Menghapus ?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });
  });
</script>
</body>
</html>
