<div class="card card-primary" style="margin-top: -30px">
  <div class="card-header">
    <h4>Pilih Warga Negaraan</h4>
  </div>
  <div class="card-body">
    <input type="text" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
    <div class="form-group">
      <select class="form-control col-sm-6" name="warga_negara" id="warga_negara">
        <option value="">---Pilih Warga---</option>
        <option value="1">WNI</option>
        <option value="2">WNA</option>
      </select>
    </div>
      <a href="<?= base_url('auth/riwayat')?>" class="btn btn-icon icon-left btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
  </div>
    
  <div id="view_detail" name="view_detail" ></div>
</div>


<script type="text/javascript">
  var csrfName = $('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
  var csrfHash = $('.txt_csrfname').val(); // CSRF hash 
          
  $("#warga_negara").change(function(){  
    var jns_pengajuan = $("#warga_negara").val(); 
    $.ajax({
      type  : 'POST',
      url   : "<?php echo site_url(); ?>auth/riwayat/jenis_warga",
      data  : {jns_pengajuan: jns_pengajuan,[csrfName]: csrfHash },
      success : function(data){
        $('.txt_csrfname').val(data.token);
        // console(data);
            $("#view_detail").html(data);
              }
            });
          });
</script>