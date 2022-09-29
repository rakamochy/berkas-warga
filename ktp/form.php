<div class="card card-primary" style="margin-top: -30px">
  <div class="card-header">
    <h4>Pilih Warga Negaraan</h4>
  </div>
  <div class="card-body">
    <form action="<?= base_url('auth/riwayat/jenis_warga_ktp')?>" method="POST">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
        <div class="form-group">
        <select class="form-control col-sm-6" name="ktp_warga" id="ktp_warga">
            <option value="">---Pilih Warga---</option>
            <option value="1">WNI</option>
            <option value="2">WNA</option>
        </select>
        </div>
        <a href="<?= base_url('auth/riwayat')?>" class="btn btn-icon icon-left btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
        <button type="submit" id="cari_data" name="cari_data" class="btn btn-primary">Lihat Data</button>
    </form>
  </div>
</div>