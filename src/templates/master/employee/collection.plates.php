<?php $this->layout('base::base', $head);
?>

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Master Pegawai
                </div>
                <h2 class="page-title">
                    Daftar Master Pegawai
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-master-employee">
                        Tambah Master Pegawai Baru</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordered">
                        <thead style="background: #cccccc;">
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Wilayah Kerja</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>340011813</td>
                                <td>Endang Retno Sri Subiyandani S.Si, M.M.</td>
                                <td>Kepala Kepala BPS Provinsi</td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>2</td>
                                <td>340016495</td>
                                <td>Agung Erianto Juliandono, SST</td>
                                <td>Kepala Bagian Tata Usaha</td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>340017315</td>
                                <td>Moviyanti SST, M.Si</td>
                                <td>Kepala Subbagian Bina Program </td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <td>4</td>
                                <td>340014977</td>
                                <td>Atik Heriyandani SE</td>
                                <td>Kepala Subbagian Kepegawaian &amp; Hukum </td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <td>5</td>
                                <td>340015494</td>
                                <td>Nurjanah S.Si, MT</td>
                                <td>Kepala Subbagian Keuangan </td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <td>6</td>
                                <td>340014908</td>
                                <td>Ir. Dhani Sukaryanti </td>
                                <td>Kepala Subbagian Umum</td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <td>7</td>
                                <td>340016118</td>
                                <td>Muhammad Ridwan SST</td>
                                <td>Kepala Subbagian Pengadaan Barang Jasa</td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>999060570</td>
                                <td>Dea Anisa Irawan</td>
                                <td>Staff Subbagian Bina Program </td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>340018349</td>
                                <td>Soleh A.Md</td>
                                <td>Staff Subbagian Bina Program </td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>340057823</td>
                                <td>Viamanda Izzania Putri SST</td>
                                <td>Staff Subbagian Bina Program </td>
                                <td>1800</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-master-employee">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-master-employee">
                                            Hapus
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

<div class="modal modal-blur fade" id="modal-create-master-employee" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat master pegawai baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div class="row">
                        <div class="col col-md-4">
                            <label class="form-label">NIP Lama</label>
                            <input class="form-control" />

                        </div>
                        <div class="col col-md-8">
                            <label class="form-label">NIP Baru</label>
                            <input class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" />
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama Pegawai</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Wilayah Kerja</label>
                            <select data-placeholder="Pilih Wilker..." name="wilker" class="form-select">
                                <option value="1800">Provinsi Lampung</option>
                                <option value="1801">Kabupaten Lampung Barat</option>
                                <option value="1802">Kabupaten Tanggamus</option>
                                <option value="1803">Kabupaten Lampung Selatan</option>
                                <option value="1804">Kabupaten Lampung Timur</option>
                                <option value="1805">Kabupaten Lampung Tengah</option>
                                <option value="1806">Kabupaten Lampung Utara</option>
                                <option value="1807">Kabupaten Way Kanan</option>
                                <option value="1808">Kabupaten Tulang Bawang</option>
                                <option value="1809">Kabupaten Pesawaran</option>
                                <option value="1810">Kabupaten Pringsewu</option>
                                <option value="1811">Kabupaten Mesuji</option>
                                <option value="1812">Kabupaten Tulang Bawang Barat</option>
                                <option value="1813">Kabupaten Pesisir Barat</option>
                                <option value="1871">Kota Bandar Lampung</option>
                                <option value="1872">Kota Metro</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Bidang Seksi</label>
                            <select data-placeholder="Pilih Seksi..." tabindex="2" name="seksi" class="form-select" required="">
                                <option value="100">Kepala BPS Provinsi</option>
                                <option value="101">Kepala BPS Kabupaten Kota</option>
                                <option value="1">Subbagian Tata Usaha</option>
                                <option value="10">Bagian Tata Usaha</option>
                                <option value="11">Subbagian Bina Program </option>
                                <option value="12">Subbagian Kepegawaian &amp; Hukum </option>
                                <option value="13">Subbagian Keuangan </option>
                                <option value="14">Subbagian Umum</option>
                                <option value="15">Subbagian Pengadaan Barang Jasa</option>
                                <option value="2">Seksi Statistik Sosial</option>
                                <option value="20">Bidang Statistik Sosial</option>
                                <option value="21">Seksi Statistik Kependudukan </option>
                                <option value="22">Seksi Statistik Ketahanan Sosial</option>
                                <option value="23">Seksi Statistik Kesejahteraan Rakyat </option>
                                <option value="3">Seksi Statistik Produksi</option>
                                <option value="30">Bidang Statistik Produksi</option>
                                <option value="31">Seksi Statistik Pertanian</option>
                                <option value="32">Seksi Statistik Industri</option>
                                <option value="33">Seksi Statistik Pertambangan, Energi dan Konstruksi</option>
                                <option value="4">Seksi Statistik Distribusi</option>
                                <option value="40">Bidang Statistik Distribusi</option>
                                <option value="41">Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar</option>
                                <option value="42">Seksi Statistik Keuangan Dan Harga Produsen</option>
                                <option value="43">Seksi Statistik Niaga dan Jasa</option>
                                <option value="5">Seksi Nerwilis</option>
                                <option value="50">Bidang Nerwilis</option>
                                <option value="51">Seksi Neraca Produksi</option>
                                <option value="52">Seksi Neraca Konsumsi</option>
                                <option value="53">Seksi Analisis Statistik Lintas Sektor</option>
                                <option value="6">Seksi IPDS</option>
                                <option value="60">Bidang IPDS</option>
                                <option value="61">Seksi Integrasi Pengolahan Data</option>
                                <option value="62">Seksi Jaringan dan Rujukan Statistik</option>
                                <option value="63">Seksi Diseminasi dan Layanan Statistik </option>
                                <option value="7">Koordinator Statistik Kecamatan</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Jabatan</label>
                            <select data-placeholder="Pilih Jabatan..." tabindex="2" name="jabatan" id="jabatan" class="form-select" required="">
                                <option value="2">Kepala BPS Provinsi</option>
                                <option value="3">Kepala Bidang/Bagian/Kabupaten/Kota</option>
                                <option value="4">Kepala Seksi/Subbag</option>
                                <option value="6">Staff</option>
                                <option value="7">KSK</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Level User</label>
                    <select tabindex="2" name="level" id="level" class="form-select" required="">
                        <option value="1">Super Administrator</option>
                        <option value="2">Administrator Prop</option>
                        <option value="3">Administrator Kab</option>
                        <option value="4">Supervisor Prop</option>
                        <option value="5">Supervisor Kab</option>
                        <option value="6">User</option>
                    </select>
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

<div class="modal modal-blur fade" id="modal-edit-master-employee" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit master pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama Pegawai</label>
                    <input class="form-control" />
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Wilayah Kerja</label>
                            <select data-placeholder="Pilih Wilker..." name="wilker" class="form-select">
                                <option value="1800">Provinsi Lampung</option>
                                <option value="1801">Kabupaten Lampung Barat</option>
                                <option value="1802">Kabupaten Tanggamus</option>
                                <option value="1803">Kabupaten Lampung Selatan</option>
                                <option value="1804">Kabupaten Lampung Timur</option>
                                <option value="1805">Kabupaten Lampung Tengah</option>
                                <option value="1806">Kabupaten Lampung Utara</option>
                                <option value="1807">Kabupaten Way Kanan</option>
                                <option value="1808">Kabupaten Tulang Bawang</option>
                                <option value="1809">Kabupaten Pesawaran</option>
                                <option value="1810">Kabupaten Pringsewu</option>
                                <option value="1811">Kabupaten Mesuji</option>
                                <option value="1812">Kabupaten Tulang Bawang Barat</option>
                                <option value="1813">Kabupaten Pesisir Barat</option>
                                <option value="1871">Kota Bandar Lampung</option>
                                <option value="1872">Kota Metro</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Bidang Seksi</label>
                            <select data-placeholder="Pilih Seksi..." tabindex="2" name="seksi" class="form-select" required="">
                                <option value="100">Kepala BPS Provinsi</option>
                                <option value="101">Kepala BPS Kabupaten Kota</option>
                                <option value="1">Subbagian Tata Usaha</option>
                                <option value="10">Bagian Tata Usaha</option>
                                <option value="11">Subbagian Bina Program </option>
                                <option value="12">Subbagian Kepegawaian &amp; Hukum </option>
                                <option value="13">Subbagian Keuangan </option>
                                <option value="14">Subbagian Umum</option>
                                <option value="15">Subbagian Pengadaan Barang Jasa</option>
                                <option value="2">Seksi Statistik Sosial</option>
                                <option value="20">Bidang Statistik Sosial</option>
                                <option value="21">Seksi Statistik Kependudukan </option>
                                <option value="22">Seksi Statistik Ketahanan Sosial</option>
                                <option value="23">Seksi Statistik Kesejahteraan Rakyat </option>
                                <option value="3">Seksi Statistik Produksi</option>
                                <option value="30">Bidang Statistik Produksi</option>
                                <option value="31">Seksi Statistik Pertanian</option>
                                <option value="32">Seksi Statistik Industri</option>
                                <option value="33">Seksi Statistik Pertambangan, Energi dan Konstruksi</option>
                                <option value="4">Seksi Statistik Distribusi</option>
                                <option value="40">Bidang Statistik Distribusi</option>
                                <option value="41">Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar</option>
                                <option value="42">Seksi Statistik Keuangan Dan Harga Produsen</option>
                                <option value="43">Seksi Statistik Niaga dan Jasa</option>
                                <option value="5">Seksi Nerwilis</option>
                                <option value="50">Bidang Nerwilis</option>
                                <option value="51">Seksi Neraca Produksi</option>
                                <option value="52">Seksi Neraca Konsumsi</option>
                                <option value="53">Seksi Analisis Statistik Lintas Sektor</option>
                                <option value="6">Seksi IPDS</option>
                                <option value="60">Bidang IPDS</option>
                                <option value="61">Seksi Integrasi Pengolahan Data</option>
                                <option value="62">Seksi Jaringan dan Rujukan Statistik</option>
                                <option value="63">Seksi Diseminasi dan Layanan Statistik </option>
                                <option value="7">Koordinator Statistik Kecamatan</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Jabatan</label>
                            <select data-placeholder="Pilih Jabatan..." tabindex="2" name="jabatan" id="jabatan" class="form-select" required="">
                                <option value="2">Kepala BPS Provinsi</option>
                                <option value="3">Kepala Bidang/Bagian/Kabupaten/Kota</option>
                                <option value="4">Kepala Seksi/Subbag</option>
                                <option value="6">Staff</option>
                                <option value="7">KSK</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Level User</label>
                    <select tabindex="2" name="level" id="level" class="form-select" required="">
                        <option value="1">Super Administrator</option>
                        <option value="2">Administrator Prop</option>
                        <option value="3">Administrator Kab</option>
                        <option value="4">Supervisor Prop</option>
                        <option value="5">Supervisor Kab</option>
                        <option value="6">User</option>
                    </select>
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

<div class="modal modal-blur fade" id="modal-delete-master-employee" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Anda sudah yakin?</div>
                <div>Jika dilanjutkan, maka master pegawai ini akan terhapus.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, hapus master pegawai ini</button>
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