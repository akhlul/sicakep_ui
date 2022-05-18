<?php $this->layout('base::base', $head);
?>

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Entri
                </div>
                <h2 class="page-title">
                    Entri Penugasan/ Target
                </h2>
            </div>
            <!-- Page title actions -->
            <!-- <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-create-target">
                        <i class="fs-2 ti ti-plus"></i>
                        Entri Baru
                    </a>
                    <a href="#" class="btn d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-create-target" aria-label="Create new report">
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
                <form action="/entry/target" class="card">
                    <div class="card-body">
                        <?php if ($session->get('level_user') == 6) : ?>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" value="<?= $pegawai_list[0]->nama ?>" readonly>
                            <input type="text" class="form-control d-none" name="target-id-pegawai" value="<?= $pegawai_list[0]->id ?>" readonly>
                        </div>
                        <?php endif ?>

                        <?php if ($session->get('level_user') != 6) : ?>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <select class="form-select" name="target-id-pegawai" placeholder="nama">
                                <?php foreach ($pegawai_list as $peg) : ?>
                                <option value="<?= $peg->id ?>" <?= $this->compare($peg->id, $session->getSet("target-id-pegawai"), "selected") ?>><?= $peg->nama ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <?php endif ?>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Bulan</label>
                                    <select id="satuan" name="target-bulan" class="form-select" required="">
                                        <option value="1" <?= $this->compare("1", $session->get("target-bulan"), "selected") ?>>Januari</option>
                                        <option value="2" <?= $this->compare("2", $session->get("target-bulan"), "selected") ?>>Februari</option>
                                        <option value="3" <?= $this->compare("3", $session->get("target-bulan"), "selected") ?>>Maret</option>
                                        <option value="4" <?= $this->compare("4", $session->get("target-bulan"), "selected") ?>>April</option>
                                        <option value="5" <?= $this->compare("5", $session->get("target-bulan"), "selected") ?>>Mei</option>
                                        <option value="6" <?= $this->compare("6", $session->get("target-bulan"), "selected") ?>>Juni</option>
                                        <option value="7" <?= $this->compare("7", $session->get("target-bulan"), "selected") ?>>Juli</option>
                                        <option value="8" <?= $this->compare("8", $session->get("target-bulan"), "selected") ?>>Agustus</option>
                                        <option value="9" <?= $this->compare("9", $session->get("target-bulan"), "selected") ?>>September</option>
                                        <option value="10" <?= $this->compare("10", $session->get("target-bulan"), "selected") ?>>Oktober</option>
                                        <option value="11" <?= $this->compare("11", $session->get("target-bulan"), "selected") ?>>November</option>
                                        <option value="12" <?= $this->compare("12", $session->get("target-bulan"), "selected") ?>>Desember</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Tahun</label>
                                    <select id="satuan" name="target-tahun" class="form-select" readonly>
                                        <option value="2022" selected>2022</option>
                                        <!-- <option value="2021" <?= $this->compare("12", $session->get("target-bulan"), "selected") ?>>2021</option> -->
                                        <!-- <option value="2020" <?= $this->compare("12", $session->get("target-bulan"), "selected") ?>>2020</option> -->
                                    </select>
                                </div>
                            </div>
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
                    <h3 class="card-title">Daftar Penugasan/Target</h3>
                    <p class="card-subtitle">Januari 2022</h3>
                </div>
                <div class="col-sm-12 col-md-auto">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-target">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <i class="fs-2 ti ti-plus"></i>
                        Tambah Penugasan Baru
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter table-nowrap">
                        <thead>
                            <tr style="background: #cccccc;">
                                <th>
                                    <div align="center">
                                        No
                                    </div>
                                </th>
                                <th>
                                    <div align="center">
                                        Bidang/Seksi
                                    </div>
                                </th>
                                <th>
                                    <div align="center">
                                        Tugas
                                    </div>
                                </th>
                                <th>
                                    <div align="center">
                                        Target
                                    </div>
                                </th>
                                <th>
                                    <div align="center">
                                        Satuan
                                    </div>
                                </th>
                                <!-- <th>
                                    <div align='center'>
                                        Angka Kredit
                                    </div>
                                </th> -->
                                <th>
                                    <div align="center">
                                        Insert By
                                    </div>
                                </th>
                                <th class="w-1"> </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($penugasan_list as $idx => $penugasan) : ?>
                            <tr>
                                <td class='text-center'><?= $idx + 1 ?></td>
                                <td><?= Ut::get_nama_seksi($penugasan->kode_seksi) ?></td>
                                <td><?= $penugasan->uraian ?></td>
                                <td class='text-left'><?= $penugasan->target . " " . Ut::get_satuan_volume($penugasan->satuan) ?></td>
                                <td class='text-left'><?= $penugasan->targetwaktu . " " . Ut::get_satuan_waktu($penugasan->satuanwaktu) ?></td>
                                <td><?= $penugasan->nama ?></td>

                                <?php if (is_null($penugasan->nilai)) :                          //is-null-penugasan-nilai 
                                    ?>

                                <?php
                                        $is_assignment_from_admin_or_self = $session->get('level_user') == '2' || ($session->get('id') == $penugasan->penugasan_by && $setting == '0');
                                        if ($is_assignment_from_admin_or_self) :                         //is-my-assignment 
                                        ?>

                                <?php if ($penugasan->kode_seksi == $session->get('bidang')) :   //which-bidang 
                                            ?>
                                <td data-type="bidang-sendiri">
                                    <div class="btn-list flex-nowrap">
                                        <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit-target">
                                            Edit
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-target">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                                <?php elseif ($session->get('bidang') != 0) :                    //which-bidang 
                                            ?>
                                <td data-type="non-bidang">
                                    <div class="btn-list flex-nowrap">
                                        <!-- <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit-target">
                                                    Edit
                                                </button> -->
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-target">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                                <?php else :                                                    //which-bidang 
                                            ?>
                                <td data-type="bidang-lain">
                                    <div class="btn-list flex-nowrap">
                                        <!-- <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit-target">
                                                    Edit
                                                </button> -->
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-target">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                                <?php endif                                                     //which-bidang 
                                            ?>

                                <?php else :                                                    //is-my-assignment 
                                        ?>
                                <td data-type="kosong"></td>
                                <?php endif                                                     //is-my-assignment 
                                        ?>

                                <?php else :                                                     //is-null-penugasan-nilai 
                                    ?>
                                <td colspan='2' align='center'>Laporan Sudah Dientry</td>
                                <?php endif                                                     //is-null-penugasan-nilai 
                                    ?>

                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-create-target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST" action="/entry/target" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Penugasan/target baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Kode Seksi</label>
                    <select class="form-select" name="target-seksi">
                        <?php
                        if ($session->get('level_user') == 1) {
                        } else if ($session->get('level_user') <= 6) {
                            if ($session->get('wilker') != '1807' && $session->get('wilker') != '1872') {
                                if ($session->get('bidang') == 1) {
                                    echo "<option disabled selected></option>";
                                    echo "<option value='0'>Kegiatan Semua Seksi</option>";
                                    echo "<option value='1'>Tata Usaha</option>";
                                } else if ($session->get('bidang') == 2) {
                                    echo "<option disabled selected></option>";
                                    echo "<option value='0'>Kegiatan Semua Seksi</option>";
                                    echo "<option value='2'>Sosial</option>";
                                } else if ($session->get('bidang') == 3) {
                                    echo "<option disabled selected></option>";
                                    echo "<option value='0'>Kegiatan Semua Seksi</option>";
                                    echo "<option value='3'>Produksi</option>";
                                } else if ($session->get('bidang') == 4) {
                                    echo "<option disabled selected></option>";
                                    echo "<option value='0'>Kegiatan Semua Seksi</option>";
                                    echo "<option value='4'>Distribusi</option>";
                                } else if ($session->get('bidang') == 5) {
                                    echo "<option disabled selected></option>";
                                    echo "<option value='0'>Kegiatan Semua Seksi</option>";
                                    echo "<option value='5'>Neraca</option>";
                                } else if ($session->get('bidang') == 6) {
                                    echo "<option disabled selected></option>";
                                    echo "<option value='0'>Kegiatan Semua Seksi</option>";
                                    echo "<option value='6'>IPDS</option>";
                                } else if ($session->get('bidang') == 0 || $session->get('bidang') == 7) {
                                    echo "<option></option>";
                                    echo "<option value='1'>Tata Usaha</option>";
                                    echo "<option value='2'>Sosial</option>";
                                    echo "<option value='3'>Produksi</option>";
                                    echo "<option value='4'>Distribusi</option>";
                                    echo "<option value='5'>Neraca</option>";
                                    echo "<option value='6'>IPDS</option>";
                                }
                            } else {
                                if (($session->get('id') == $session->get('target-id-pegawai')) || $session->get('level_user') == 6) {
                                    echo "<option></option>";
                                    echo "<option value='1'>Tata Usaha</option>";
                                    echo "<option value='2'>Sosial</option>";
                                    echo "<option value='3'>Produksi</option>";
                                    echo "<option value='4'>Distribusi</option>";
                                    echo "<option value='5'>Neraca</option>";
                                    echo "<option value='6'>IPDS</option>";
                                } else {
                                    if ($session->get('bidang') == 1) {
                                        echo "<option></option>";
                                        echo "<option value='1'>Tata Usaha</option>";
                                    } else if ($session->get('bidang') == 2) {
                                        echo "<option></option>";
                                        echo "<option value='2'>Sosial</option>";
                                    } else if ($session->get('bidang') == 3) {
                                        echo "<option></option>";
                                        echo "<option value='3'>Produksi</option>";
                                    } else if ($session->get('bidang') == 4) {
                                        echo "<option></option>";
                                        echo "<option value='4'>Distribusi</option>";
                                    } else if ($session->get('bidang') == 5) {
                                        echo "<option></option>";
                                        echo "<option value='5'>Neraca</option>";
                                    } else if ($session->get('bidang') == 6) {
                                        echo "<option></option>";
                                        echo "<option value='6'>IPDS</option>";
                                    }
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pekerjaan</label>
                    <select class="form-select" name="target-id-kegiatan" hx-get="/entry/target/fetch" hx-target="#target-volume-dan-durasi" hx-trigger="changed">
                        <?php
                        foreach ($nama_pekerjaan_list as $nama_pekerjaan) {
                            if ($session->get('bidang') > 0 && $session->get('bidang') <= 6) {
                                echo "<option value='" . $nama_pekerjaan->id_keg . "'>" . $nama_pekerjaan->uraian . "</option>";
                            } else {
                                echo "<option class='dt " . $nama_pekerjaan->kode_seksi . "' value='" . $nama_pekerjaan->id_keg . "'>" . $nama_pekerjaan->uraian . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3" id=>
                    <div class="row g-2">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Volume</label>
                            <input type="text" class="form-control" name="target-volume">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Satuan Volume</label>
                            <select id="target-satuan-volume-create" name="target-satuan-volume" class="form-select">
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Durasi -->
                            <label class="form-label">Durasi</label>
                            <input type="text" class="form-control" name="target-durasi" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Satuan Durasi -->
                            <label class="form-label">Satuan Durasi</label>
                            <select id="target-satuan-durasi-create" name="target-satuan-durasi" class="form-select">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <button class="btn btn-primary ms-auto" type="submit">
                    <i class="fs-2 ti ti-plus"></i>
                    Buat penugasan baru
                </button>
            </div>
        </form>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-edit-target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit penugasan/target</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Kode Seksi</label>
                    <input class="form-control" name="uraian_pekerjaan" disabled />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pekerjaan</label>
                    <input class="form-control" name="uraian_pekerjaan" disabled />
                </div>

                <div class="mb-3">
                    <div class="row g-2">
                        <div class="col">
                            <label class="form-label">Volume</label>
                            <input type="text" class="form-control" name="volume" value="2">
                        </div>
                        <div class="col">
                            <label class="form-label">Satuan Volume</label>
                            <select id="satuan" name="satuan" class="form-select" required>
                                <option selected="" disabled="" class="text-muted">Pilih satuan...</option>
                                <option value="38">Asosiasi</option>
                                <option value="1">Blok Sensus</option>
                                <option value="20">BRS</option>
                                <option value="21">Buku</option>
                                <option value="10">Daftar</option>
                                <option value="24">Database</option>
                                <option value="2">Dokumen</option>
                                <option value="22">Eksemplar</option>
                                <option value="17">File</option>
                                <option value="28">Instansi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <!-- Durasi -->
                            <label class="form-label">Durasi</label>
                            <input type="text" class="form-control" name="durasi" value="2">
                        </div>
                        <div class="col">
                            <!-- Satuan Durasi -->
                            <label class="form-label">Satuan Durasi</label>
                            <select id="satuan" name="satuandurasi" class="form-select" required>
                                <option selected="" disabled="" class="text-muted">Pilih satuan...</option>
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                                <option value="3">Hari</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <i class="fs-2 ti ti-plus"></i>
                    Simpan penugasan
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-delete-target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Anda sudah yakin?</div>
                <div>Jika dilanjutkan, maka penugasan/target ini akan terhapus.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, hapus penugasan ini</button>
            </div>
        </div>
    </div>
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