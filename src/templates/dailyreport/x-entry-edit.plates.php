<!-- HTMX -->

<div class="modal-dialog modal-lg" role="document">
    <form method="POST" action="/dailyreport/entry/<?= $dailyreport->id_laporan ?>" class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit laporan harian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Uraian Pekerjaan</label>
                <textarea class="form-control" name="entry-uraian-pekerjaan" rows="3"><?= $this->e($dailyreport->uraian) ?> </textarea>
            </div>
            <div class="mb-3">
                <div class="row g-2">
                    <div class="col">
                        <label class="form-label">Kuantitas</label>
                        <input type="text" class="form-control" name="entry-volume" value="<?= $dailyreport->volume ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Satuan Kuantitas</label>
                        <select id="satuan" name="entry-satuan-volume" class="form-select" required>
                            <option selected="" disabled="" class="text-muted">Pilih satuan...</option>
                            <?php foreach ($satuan_kuantitas as $idx => $obj) : ?>
                            <option value='<?= $obj->id_satuan ?>' <?= $this->compare($dailyreport->satuan_volume, $obj->id_satuan, "selected") ?>>
                                <?= $obj->satuan ?>
                            </option>"
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <!-- Durasi -->
                        <label class="form-label">Durasi</label>
                        <input type="text" class="form-control" name="entry-durasi" value="<?= $dailyreport->durasi ?>">
                    </div>
                    <div class="col">
                        <!-- Satuan Durasi -->
                        <label class="form-label">Satuan Durasi</label>
                        <select id="satuan" name="entry-satuan-durasi" class="form-select" required>
                            <option selected="" disabled="" class="text-muted">Pilih satuan...</option>
                            <option value="3" <?= $this->compare($dailyreport->satuan_durasi, 3, "selected") ?>>Menit</option>
                            <option value="2" <?= $this->compare($dailyreport->satuan_durasi, 2, "selected") ?>>Jam</option>
                            <option value="1" <?= $this->compare($dailyreport->satuan_durasi, 1, "selected") ?>>Hari</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Pemberi Tugas</label>
                <select id="assigner" name="entry-pemberi-tugas" class="form-select" required="required">
                    <?php // if eselon 3 
                    if ($_SESSION['wilker'] != '1800' && $_SESSION['eselon'] == '3') : ?>
                    <option value='340011813' <?= $this->compare($dailyreport->pemberi_tugas, '340011813', "selected") ?>>Endang Retno Sri Subiyandani S.Si, M.M.</option>
                    <?php endif ?>


                    <?php // if wilayah kerjanya sedang dibawahi oleh PLT
                    if ($_SESSION['wilker'] == '1811') : ?>
                    <!-- <option value='340013742'>Sudiyanto S.Si., MM</option> -->
                    <?php endif ?>


                    <?php // lainnya
                    foreach ($pemberi_tugas as $idx => $obj) : ?>
                    <option value='<?= $obj->id ?>' <?= $this->compare($dailyreport->pemberi_tugas, $obj->id, "selected") ?>><?= $obj->nama ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
            </a>
            <button type="submit" class="btn btn-primary ms-auto">
                <i class="fs-2 ti ti-plus"></i>
                Simpan perubahan laporan
            </button>
        </div>
    </form>
</div>