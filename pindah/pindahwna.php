<div class="card card-primary" style="margin-top: -30px">
  <div class="card-header">
    <h4>Riwayat Pengajuan Pindah WNA</h4>
    <div class="card-header-action">
    <a href="<?= base_url('auth/riwayat/pindah_penduduk')?>" class="btn btn-icon icon-left btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
        <thead>
          <tr>
          <th align="center">No</th>
	        <th>Atas Nama</th>
	        <th>Jenis Pindah</th>
	        <th>Jenis Layanan</th>
	        <th>Tgl Pengajuan</th>
	        <th>Status</th>
	        <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 1;
          foreach ($data as $dt){?>
          <tr>
            <td><?= $no++?></td>
            <td><?= $dt->namakk?></td>
            <td><?= $dt->jenis_pindah?></td>
            <td><?= $dt->jns_layanan?></td>
              <td><?= date("d-m-y",strtotime($dt->tgl_pengajuan))?></td>
              <td>
                <?php 
                if ($dt->status == 'Pengajuan') {?>
                  <div class="badge badge-warning badge-shadow"><?= $dt->status?></div>
                <?php } elseif ($dt->status == 'Ditolak') {?>
                  <div class="badge badge-danger badge-shadow"><?= $dt->status?></div>
                <?php } else {?>
                  <div class="badge badge-success badge-shadow"><?= $dt->status?></div>
                <?php } ?>
              </td>
              <td><a href="#" class="btn btn-primary">Detail</a></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>