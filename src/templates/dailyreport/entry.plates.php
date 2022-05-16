<?php $this->layout('base::base', $head);
date_default_timezone_set('Asia/Jakarta');
?>

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Laporan Harian
                </div>
                <h2 class="page-title">
                    Entri Laporan Harian
                </h2>
            </div>
            <!-- Page title actions -->
            <!-- <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-create-daily-report">
                        <i class="fs-2 ti ti-plus"></i>
                        Entri Baru
                    </a>
                    <a href="#" class="btn d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-create-daily-report" aria-label="Create new report">
                        <i class="fs-2 ti ti-plus"></i>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            <div class="col-sm-12 col-lg-6">
                <!-- Detail Pelapor/Pengguna -->
                <form action="/dailyreport/entry/" class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Pelapor</h3>
                    </div> -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="entri-nama" value="<?= $session->get('nama') ?>" readonly>
                            <input type="text" class="form-control d-none" name="entri-id-pegawai" value="<?= $session->get('id') ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="datepicker-inline" name="entri-tanggal-keg" value="<?= $session->getSet('entri-tanggal-keg', Date("Y-m-d")) ?>">
                            <!-- <div class="datepicker-inline" id="datepicker-inline"></div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lihat Daftar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-fluid">
        <div class="card">
            <div class="gap-3 card-header row">
                <div class="col-sm-12 col-md">
                    <h3 class="card-title">Daftar Laporan Harian</h3>
                    <p class="card-subtitle">
                        <?= $this->moment($session->getSet('entri-tanggal-keg')) ?>
                        <!-- Senin, 3 Januari 2022 -->
                    </p>
                </div>
                <div class="col-sm-12 col-md-auto">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-daily-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <i class="fs-2 ti ti-plus"></i>
                        Tambah Baru
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php if ($msg = $session->getFlash("message")) : ?>
                    <small class="form-hint mt-2">
                        <?= $msg ?>
                    </small>
                    <?php endif ?>
                    <table class="table table-vcenter table-nowrap">
                        <thead>
                            <tr>
                                <th rowspan="2">
                                    <div align="center">
                                        No
                                    </div>
                                </th>
                                <!-- <th rowspan="2">
                                    <div align="center">
                                        Tanggal
                                    </div>
                                </th> -->
                                <th rowspan="2">
                                    <div align="center">
                                        Deskripsi <br> Pekerjaan / Penugasan
                                    </div>
                                </th>
                                <th colspan="2">
                                    <div align="center">
                                        Kuantitas
                                    </div>
                                </th>
                                <th rowspan="2">
                                    <div align="center">
                                        Durasi Waktu<br>Pengerjaan
                                    </div>
                                </th>
                                <th rowspan="2">
                                    <div align="center">
                                        Pemberi Tugas
                                    </div>
                                </th>
                                <th rowspan="2">
                                    <div align="center">
                                        Status <br> Penyelesaian
                                    </div>
                                </th>
                                <th colspan="2">
                                    <div align="center">
                                        Aksi
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div align="center">Volume</div>
                                </th>
                                <th>
                                    <div align="center">Satuan</div>
                                </th>
                                <th>
                                    <div align="center">Edit</div>
                                </th>
                                <th>
                                    <div align="center">Hapus</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dailyreport_list as $idx => $report) : ?>
                            <tr>
                                <td>
                                    <div align='center'><?= ($idx + 1) ?></div>
                                </td>
                                <!-- <td nowrap>
                                    <?= $report->tanggal ?>
                                </td> -->
                                <td align='left'>
                                    <?= $report->uraian ?>
                                </td>
                                <td>
                                    <div align='center'><?= $report->volume ?></div>
                                </td>
                                <td>
                                    <div align='center'><?= $report->satuan ?></div>
                                </td>
                                <td>
                                    <div align='center'><?= $report->durasi ?> <?= $report->waktu ?></div>
                                </td>
                                <td nowrap>
                                    <div align='center'><?= $report->nama ?></div>
                                </td>
                                <td>
                                    <div align='center'></div>
                                </td>
                                <td align='center' id='<?= $report->id_laporan ?>'>
                                    <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit-daily-report" hx-get="/dailyreport/entry/<?= $report->id_laporan ?>" hx-trigger="click" hx-target="#modal-edit-daily-report" hx-swap="innerHTML">
                                        <i class="fs-2 ti ti-edit-circle"></i>
                                    </button>
                                </td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#modal-delete-target" hx-get="/dailyreport/entry/<?= $report->id_laporan ?>/delete" hx-trigger="click" hx-target="#modal-delete-target" hx-swap="innerHTML">
                                        <div align='center'><i class="fs-2 ti ti-circle-x"></i></div>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-create-daily-report" tabindex="-1" aria-hidden="true">
    <form method="POST" action="/dailyreport/entry" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laporan harian baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Uraian Pekerjaan</label>
                    <textarea class="form-control" name="entry-uraian-pekerjaan" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="row g-2">
                        <div class="col">
                            <label class="form-label">Kuantitas</label>
                            <input type="text" class="form-control" name="entry-volume" value="2">
                        </div>
                        <div class="col">
                            <label class="form-label">Satuan Kuantitas</label>
                            <select id="satuan" name="entry-satuan-volume" class="form-select" required>
                                <option selected="" disabled="" class="text-muted">Pilih satuan...</option>
                                <?php foreach ($satuan_kuantitas as $idx => $obj) : ?>
                                <option value='<?= $obj->id_satuan ?>'><?= $obj->satuan ?></option>"
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
                            <input type="text" class="form-control" name="entry-durasi" value="2">
                        </div>
                        <div class="col">
                            <!-- Satuan Durasi -->
                            <label class="form-label">Satuan Durasi</label>
                            <select id="satuan" name="entry-satuan-durasi" class="form-select" required>
                                <option selected="" disabled="" class="text-muted">Pilih satuan...</option>
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                                <option value="3">Hari</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pemberi Tugas</label>
                    <select id="assigner" name="entry-pemberi-tugas" class="form-select" required="required">
                        <?php // if eselon 3 
                        if ($_SESSION['wilker'] != '1800' && $_SESSION['eselon'] == '3') : ?>
                        <option value='340011813'>Endang Retno Sri Subiyandani S.Si, M.M.</option>
                        <?php endif ?>


                        <?php // if wilayah kerjanya sedang dibawahi oleh PLT
                        if ($_SESSION['wilker'] == '1811') : ?>
                        <!-- <option value='340013742'>Sudiyanto S.Si., MM</option> -->
                        <?php endif ?>


                        <?php // lainnya
                        foreach ($pemberi_tugas as $idx => $obj) : ?>
                        <option value='<?= $obj->id ?>'><?= $obj->nama ?></option>
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
                    Buat Laporan Baru
                </button>
            </div>
        </div>
    </form>
</div>

<div class="modal modal-blur fade" id="modal-edit-daily-report" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document"></div>
</div>

<div class="modal modal-blur fade" id="modal-delete-target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@2.0.2/build/global/luxon.min.js"></script>
<script src="https://unpkg.com/htmx.org@1.7.0" defer></script>
<script>
window.picker = new Litepicker({
    element: document.getElementById('datepicker-inline'),
    // inlineMode: true,
    // position: "right"
});

var mydate = luxon.DateTime.fromFormat("Mar 2 1982", "LLL d yyyy").setLocale('id').toFormat("dd MMMM yyyy")
console.log(mydate)
</script>