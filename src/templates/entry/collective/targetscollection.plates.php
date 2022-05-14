<?php $this->layout('base::base', $head);
?>

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/css/tom-select.css" rel="stylesheet">


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
                    Entri Kolektif Penugasan/ Target
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
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Pelapor</h3>
                    </div> -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Daftar Nama</label>
                            <!-- <select id="select-state" name="state[]" multiple placeholder="Select a state..." autocomplete="off"> -->
                            <select id="select-assigned" name="assigned[]" multiple placeholder="Pilih nama..." autocomplete="off">
                                <option value="340011813">Endang Retno Sri Subiyandani S.Si, M.M.</option>
                                <option value="340016495">Agung Erianto Juliandono, SST</option>
                                <option value="340015952">Mas ud Rifai SST</option>
                                <option value="340013848">Ir. Dwiyana S M.M</option>
                                <option value="340011683">Riduan M.Si.</option>
                                <option value="340013629">Ir. Nurul Andriana</option>
                                <option value="340013742">Sudiyanto S.Si., MM</option>
                                <option value="340014977">Atik Heriyandani SE</option>
                                <option value="340014908">Ir. Dhani Sukaryanti </option>
                                <option value="340017315">Moviyanti SST, M.Si</option>
                                <option value="340016118">Muhammad Ridwan SST</option>
                                <option value="340015494">Nurjanah S.Si, MT</option>
                                <option value="340015810">Gita Yudianingsih S.Si</option>
                                <option value="340016258">Henny Surya Indraswari SST.,M.Si</option>
                                <option value="340013841">Ir. Sudarti </option>
                                <option value="340015573">Dhyantanu Harsa SST.,MM</option>
                                <option value="340013846">Ir. Sri Rezkie Desmawati ME</option>
                                <option value="340012939">John Knedi S.Si, MM</option>
                                <option value="340051034">Andrawina Susanto S.Si</option>
                                <option value="340017168">Bayu Juniardi SE</option>
                                <option value="340015752">Muhammad Ilham Salam SST,M.Stat</option>
                                <option value="340015135">Drisnaf Swastyardi, S.Si MSE, MA.</option>
                                <option value="340051147">Gun Gun Nugraha S.Si, M.S.E</option>
                                <option value="340016005">Tribuana Kartikasari S.Si, MSE</option>
                                <option value="340054279">Arifin Jafar SST</option>
                                <option value="340016231">Dewi Wahyuningsih SST., M.Si</option>
                                <option value="340016487">Jua Mahardhika SST</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="nama" value="Arifin Jafar" readonly> -->
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Bulan</label>
                                    <select id="satuan" name="satuan" class="form-select" required="">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04" selected="">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Tahun</label>
                                    <select id="satuan" name="satuandurasi" class="form-select" required="">
                                        <option value="1">2022</option>
                                        <option value="2">2021</option>
                                        <option value="3">2020</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lihat Daftar</button>
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-target">Tambah Penugasan Kolektif Baru</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="page-body">
    <div class="container-fluid row">
        <!-- Repeatable Cards for Each User -->
        <div class="card col-12">
            <div class="gap-3 card-header row">
                <div class="col-sm-12 col-md">
                    <h3 class="card-title">Daftar Penugasan/Target {Terpilih A}</h3>
                    <p class="card-subtitle">Januari 2022</h3>
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

                            <tr>
                                <td>
                                    <div align="center">1</div>
                                </td>
                                <td>IPDS</td>
                                <td>Innas Pelatihan Inda Pemutakhiran Geospasial dan Muatan Wilkerstat</td>
                                <td align="left">1 Kegiatan</td>
                                <td align="left">24 Jam</td>
                                <td>Arifin Jafar SST</td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-target">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card col-12">
            <div class="gap-3 card-header row">
                <div class="col-sm-12 col-md">
                    <h3 class="card-title">Daftar Penugasan/Target {Terpilih B}</h3>
                    <p class="card-subtitle">Januari 2022</h3>
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

                            <tr>
                                <td>
                                    <div align="center">1</div>
                                </td>
                                <td>IPDS</td>
                                <td>Innas Pelatihan Inda Pemutakhiran Geospasial dan Muatan Wilkerstat</td>
                                <td align="left">1 Kegiatan</td>
                                <td align="left">24 Jam</td>
                                <td>Arifin Jafar SST</td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-target">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-create-target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Penugasan/target baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Kode Seksi</label>
                    <input class="form-control" name="uraian_pekerjaan" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pekerjaan</label>
                    <input class="form-control" name="uraian_pekerjaan" />
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
                    Buat penugasan baru
                </a>
            </div>
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/js/tom-select.complete.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@2.0.2/build/global/luxon.min.js"></script>
<script>
    function ready(fn) {
        if (document.readyState != 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    new TomSelect("#select-assigned", {
        plugins: ['checkbox_options'],
    })
    // window.picker = new Litepicker({
    //     element: document.getElementById('datepicker-inline'),
    // });
    // var mydate = luxon.DateTime.fromFormat("Mar 2 1982", "LLL d yyyy").setLocale('id').toFormat("dd MMMM yyyy")
</script>