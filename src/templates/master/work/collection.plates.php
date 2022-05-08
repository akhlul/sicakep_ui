<?php $this->layout('base::base', $head);
?>

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Master Pekerjaan
                </div>
                <h2 class="page-title">
                    Daftar Master Pekerjaan
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row g-2">
                    <div class="col-12 col-md">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="pe-2 ti ti-search"></i>
                            </span>
                            <input type="text" class="form-control" name="tgl_kegiatan" value="">
                        </div>
                    </div>
                    <div class="col-12 col-md-auto">
                        <button class="btn btn-icon">
                            Cari...
                        </button>
                    </div>
                </div>
                <div class="card-actions d-none d-sm-block">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-proposed-master-work">
                        Usul Pekerjaan Baru</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bidang/Seksi</th>
                                <th>Komponen/Uraian Tugas Jabatan</th>
                                <th>Satuan Kegiatan</th>
                                <th>Satuan Waktu</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted">2</td>
                                <td colspan="5" class="text-muted">- SURVEI
                                    PENGUKURAN TINGKAT KEBAHAGIAAN (SPTK)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sosial</td>
                                <td>___Pengawasan SPTK</td>
                                <td>O-P</td>
                                <td>Hari</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sosial</td>
                                <td>___Supervisi SPTK</td>
                                <td>O-P</td>
                                <td>Hari</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sosial</td>
                                <td>___Penyusunan Laporan SPTK</td>
                                <td>Buku</td>
                                <td>Hari</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sosial</td>
                                <td>___Membuat alokasi dokumen</td>
                                <td>Daftar</td>
                                <td>Jam</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-work">
                                            Edit
                                        </a>
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
</div>

<div class="modal modal-blur fade" id="modal-create-proposed-master-work" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Usulan master pekerjaan baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Kode Bidang/Seksi</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Komponen Kegiatan</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Uraian Pekerjaan</label>
                    <textarea class="form-control" name="uraian_pekerjaan" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="row">
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
                        <div class="col">
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
                    <label class="form-label">Kode & Butir Kegiatan Fungsional</label>
                    <input class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <i class="fs-2 ti ti-plus"></i>
                    Usulkan
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-edit-master-work" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit master pekerjaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Kode Bidang/Seksi</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Kegiatan</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Komponen </label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <div class="row">
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
                        <div class="col">
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
                    Simpan perubahan
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/luxon@2.0.2/build/global/luxon.min.js">
</script>
<script>
    window.picker = new Litepicker({
        element: document.getElementById('datepicker-inline'),
        // inlineMode: true,
        // position: "right"
    });

    var mydate = luxon.DateTime.fromFormat("Mar 2 1982", "LLL d yyyy").setLocale(
        'id').toFormat("dd MMMM yyyy")
    console.log(mydate)
</script>