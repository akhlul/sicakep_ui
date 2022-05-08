<?php $this->layout('base::base', $head);
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
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Pelapor</h3>
                    </div> -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="Arifin Jafar" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bulan Tanggal</label>
                            <input type="text" class="form-control" id="datepicker-inline" name="tgl_kegiatan" value="">
                            <!-- <div class="datepicker-inline" id="datepicker-inline"></div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lihat Daftar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header row gap-3">
                <div class="col-sm-12 col-md">
                    <h3 class="card-title">Daftar Laporan Harian</h3>
                    <p class="card-subtitle">Senin, 3 Januari 2022</h3>
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
                    <table class="table table-vcenter table-nowrap">
                        <thead>
                            <tr>
                                <th rowspan="2">
                                    <div align="center">
                                        No
                                    </div>
                                </th>
                                <th rowspan="2">
                                    <div align="center">
                                        Tanggal
                                    </div>
                                </th>
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

                            <tr>
                                <td>
                                    <div align="center">1</div>
                                </td>
                                <td nowrap="">2022-01-03</td>
                                <td align="left">Rapat awal bulan dengan seluruh pegawai IPD Provinsi Lampung</td>
                                <td>
                                    <div align="center">1</div>
                                </td>
                                <td>
                                    <div align="center">Kegiatan</div>
                                </td>
                                <td>
                                    <div align="center">1 Hari</div>
                                </td>
                                <td nowrap="">
                                    <div align="center">Sudiyanto S.Si., MM</div>
                                </td>
                                <td>
                                    <div align="center"></div>
                                </td>
                                <td data-toggle="modal" class="editlaporan2" type="2" id="115701" align="center">
                                    <i class="fs-2 ti ti-edit-circle"></i>
                                </td>
                                <td class="text-center text-decoration-none">
                                    <a href="?page=laporanwfh2&amp;action=hapus2&amp;id=115701" onclick="return confirm('Apakah Anda yakin akan menghapus item ini?');">
                                        <i class="fs-2 ti ti-circle-x"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="center">2</div>
                                </td>
                                <td nowrap="">2022-01-03</td>
                                <td align="left">Zoom Apel BPS seluruh indonesia</td>
                                <td>
                                    <div align="center">1</div>
                                </td>
                                <td>
                                    <div align="center">Kegiatan</div>
                                </td>
                                <td>
                                    <div align="center">1 Hari</div>
                                </td>
                                <td nowrap="">
                                    <div align="center">Sudiyanto S.Si., MM</div>
                                </td>
                                <td>
                                    <div align="center"></div>
                                </td>
                                <td data-toggle="modal" class="editlaporan2" type="2" id="115701" align="center">
                                    <i class="fs-2 ti ti-edit-circle"></i>
                                </td>
                                <td class="text-center text-decoration-none">
                                    <a href="?page=laporanwfh2&amp;action=hapus2&amp;id=115701" onclick="return confirm('Apakah Anda yakin akan menghapus item ini?');">
                                        <i class="fs-2 ti ti-circle-x"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal modal-blur fade" id="modal-create-daily-report" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laporan harian baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Uraian Pekerjaan</label>
                    <textarea class="form-control" name="uraian_pekerjaan" rows="3"></textarea>
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
                <div class="mb-3">
                    <label class="form-label">Pemberi Tugas</label>
                    <select id="assigner" name="assigner" class="form-select" required="required">
                        <option></option>
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
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <i class="fs-2 ti ti-plus"></i>
                    Buat Laporan Baru
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@2.0.2/build/global/luxon.min.js"></script>
<script>
    window.picker = new Litepicker({
        element: document.getElementById('datepicker-inline'),
        // inlineMode: true,
        // position: "right"
    });

    var mydate = luxon.DateTime.fromFormat("Mar 2 1982", "LLL d yyyy").setLocale('id').toFormat("dd MMMM yyyy")
    console.log(mydate)
</script>