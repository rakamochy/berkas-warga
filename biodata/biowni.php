<div class="card card-primary" style="margin-top: -30px">
  <div class="card-header">
    <h4>Riwayat Pencatatan Biodata WNI</h4>
        <div class="card-header-action">
    <a href="<?= base_url('auth/riwayat/biodata')?>" class="btn btn-icon icon-left btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
        <thead>
          <tr>
          <th align="center">No</th>
          <th>Atas Nama</th>
	        <th>Lokasi Pengajuan</th>
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
            <td><?= $dt->lokasiwni?></td>
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
              <td><a href="#" data-toggle="modal" data-target="#detail-data<?= $dt->id?>" class="btn btn-primary">Detail</a></td>
            </tr>

        <div class="modal fade" id="detail-data<?= $dt->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pengajuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php if ($dt->status == 'Ditolak') {?>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" readonly><?= $dt->keterangan?></textarea>
                  </div>
                <?php } elseif ($dt->status == 'Disetujui') {?>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" readonly><?= $dt->keterangan?></textarea>
                  </div>
                <?php } else {
                  echo '<div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" readonly>Pengajuan masih dalam proses antrian</textarea>
                  </div>';
                }?>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
              </div>
            </div>
          </div>
        </div>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>