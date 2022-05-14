<?php $this->layout('base::base', $head);
?>

<style>
    #vanilla-spreadsheet td:focus {
        background-color: var(--tblr-table-striped-bg);
    }
</style>

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
                    Entri Penilaian Laporan/ Realisasi
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
                    <div class="col-12 col-md-auto">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="icon ti ti-user"></i>
                            </span>
                            <select type="text" value="" class="form-select" placeholder="Username">
                                <option value="1">Aatina Izzati Penta Harnowati SE, Ms.Ak</option>
                                <option value="2">Agung Erianto Juliandono, SST</option>
                                <option value="3">Ahlul Karom S.Tr.Stat.</option>
                                <option value="4">Ajeng Miftahul Hasanah</option>
                                <option value="5">Andrawina Susanto S.Si</option>
                                <option value="6">Anggia Wulandari Harahap S.Psi</option>
                                <option value="7">Annisa Nur Islami Warrohmah SST</option>
                                <option value="8">Arief Rahmanda Al-Mursyid SST</option>
                                <option value="9">Arifin Jafar SST</option>
                                <option value="10">Arip Purwanto A.Md</option>
                                <option value="11">Atik Heriyandani SE</option>
                                <option value="12">Bayu Juniardi SE</option>
                                <option value="13">Bayu Prasetyo SST, M.Si.</option>
                                <option value="14">Clara Tridiana, SST, MSE</option>
                                <option value="15">Dea Anisa Irawan</option>
                                <option value="16">Desliyani Tri Wandita SST</option>
                                <option value="17">Desyana Khotiah</option>
                                <option value="18">Dewi Wahyuningsih SST., M.Si</option>
                                <option value="19">Dhyantanu Harsa SST.,MM</option>
                                <option value="20">Drisnaf Swastyardi, S.Si MSE, MA.</option>
                                <option value="21">Eka Yusda SE</option>
                                <option value="22">Eko Teguh Widodo SST</option>
                                <option value="23">Emmayati S.Si.</option>
                                <option value="24">Endang Retno Sri Subiyandani S.Si, M.M.</option>
                                <option value="25">Erika Haryulistiani Saksono SE.</option>
                                <option value="26">Fadheel Wisnu</option>
                                <option value="27">Febiyana Qomariyah SST.,M.M.</option>
                                <option value="28">Firna Novi Anggoro SH, M.H.</option>
                                <option value="29">Fransiska Suryani A.Md.</option>
                                <option value="30">Gita Yudianingsih S.Si</option>
                                <option value="31">Gun Gun Nugraha S.Si, M.S.E</option>
                                <option value="32">Hardianty S.Si</option>
                                <option value="33">Henny Surya Indraswari SST.,M.Si</option>
                                <option value="34">Herman</option>
                                <option value="35">Heru Wijayanto</option>
                                <option value="36">Hesty Ayuningtiyas, SST</option>
                                <option value="37">Ir. Dhani Sukaryanti </option>
                                <option value="38">Ir. Dwiyana S M.M</option>
                                <option value="39">Ir. Nurul Andriana</option>
                                <option value="40">Ir. Sri Rezkie Desmawati ME</option>
                                <option value="41">Ir. Sudarti </option>
                                <option value="42">Ir. Wagiman Purwoko </option>
                                <option value="43">Irvan Patuan Marsahala Simamora SST</option>
                                <option value="44">Jafri</option>
                                <option value="45">John Knedi S.Si, MM</option>
                                <option value="46">Jua Mahardhika SST</option>
                                <option value="47">K. Nurika Damayanti SST., M.Stat.</option>
                                <option value="48">Luxmaning Hutaki Widiastari S.Psi</option>
                                <option value="49">M.E. Ivan Sihaloho A.Md</option>
                                <option value="50">Mas ud Rifai SST</option>
                                <option value="51">Maya Narang Ali SST</option>
                                <option value="52">Maya Puspa Hati</option>
                                <option value="53">Mega Astuti SST</option>
                                <option value="54">Meiru Rezki</option>
                                <option value="55">Mertha Pessela SP, M.M.</option>
                                <option value="56">Moviyanti SST, M.Si</option>
                                <option value="57">Mudjono B.St</option>
                                <option value="58">Muhammad Ilham Salam SST,M.Stat</option>
                                <option value="59">Muhammad Ridwan SST</option>
                                <option value="60">Muhammad Sabiel Adi Prakasa SST</option>
                                <option value="61">Muhammad Shalih S.Stat.</option>
                                <option value="62">Mukhlis SST</option>
                                <option value="63">Nanto Dwi Cahyo S.Tr.Stat.</option>
                                <option value="64">Nur Hendra Sunaryo A.Md</option>
                                <option value="65">Nur Indah SE</option>
                                <option value="66">Nurdiansyah SST</option>
                                <option value="67">Nurjanah S.Si, MT</option>
                                <option value="68">Poniran</option>
                                <option value="69">Prabudi Dharma A.Md</option>
                                <option value="70">Radika Trianda SE</option>
                                <option value="71">Ratna Kusuma Ningrum S.Si</option>
                                <option value="72">Ricardo Tampubolon</option>
                                <option value="73">Riduan M.Si.</option>
                                <option value="74">Risma Arisandi, A.Md</option>
                                <option value="75">Rochayatini SE</option>
                                <option value="76">Santi Novitasari SE</option>
                                <option value="77">Singgih Adiwijaya </option>
                                <option value="78">Soleh A.Md</option>
                                <option value="79">Sudiyanto S.Si., MM</option>
                                <option value="80">Sumapto</option>
                                <option value="81">Supian SE.</option>
                                <option value="82">Sutikno SE</option>
                                <option value="83">Syifa Rizqi</option>
                                <option value="84">Teta Puti Sugesti SST</option>
                                <option value="85">Tri Apriliya</option>
                                <option value="86">Tribuana Kartikasari S.Si, MSE</option>
                                <option value="87">Viamanda Izzania Putri SST</option>
                                <option value="88">Wike Yulia SST</option>
                                <option value="89">Wikki Wildana</option>
                                <option value="90">Yeni Agustiawati SST</option>
                                <option value="91">Yosep SST., MA.</option>
                                <option value="92">Yudi Purwanto</option>
                                <option value="93">Yuniarsih SE.</option>
                                <option value="94">Zaza Y Perwira</option>
                                <option value="95">Zulfiana Nurul Lathifah S.Si.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto">
                        <div class="input-group">
                            <span class="input-group-text" for="input-select-bulan">
                                <i class="ti ti-calendar-time"></i>
                            </span>
                            <select name="bulanabsen" class="input form-select" id="input-select-bulan" placeholder="Pilih bulan...">
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
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
                    </div>
                    <div class="col-12 col-md-auto">
                        <button class="btn btn-primary btn-icon">
                            <i class="pe-2 ti ti-eye"></i>
                            Lihat
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="vanilla-spreadsheet" class="table table-vcenter table-nowrap">
                        <thead>
                            <tr>
                                <th rowspan="2">
                                    <div align="center"><strong>
                                            No
                                        </strong></div>
                                </th>
                                <th rowspan="2">
                                    <div align="center"><strong>
                                            Seksi
                                        </strong></div>
                                </th>
                                <th rowspan="2">
                                    <div align="center"><strong>
                                            Tugas
                                        </strong></div>
                                </th>
                                <th colspan="2">
                                    <div align="center"><strong>
                                            Target
                                        </strong></div>
                                </th>
                                <th colspan="3">
                                    <div align="center"><strong>
                                            Realisasi
                                        </strong></div>
                                </th>
                                <th rowspan="2">
                                    <div align="center"><strong>
                                            Keterangan
                                        </strong></div>
                                </th>
                                <th rowspan="2">
                                    <div align="center"><strong>
                                            Status
                                        </strong></div>
                                </th>
                                <th rowspan="2" class="w-1">
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div align="center"><strong>
                                            Kuantitas
                                        </strong></div>
                                </th>
                                <th>
                                    <div align="center"><strong>
                                            Waktu
                                        </strong></div>
                                </th>
                                <!-- <th>
                                    <div align='center'><strong>
                                            Kualitas
                                        </strong></div>
                                </th> -->
                                <th>
                                    <div align="center"><strong>
                                            Kuantitas
                                        </strong></div>
                                </th>
                                <th>
                                    <div align="center"><strong>
                                            Waktu
                                        </strong></div>
                                </th>
                                <th>
                                    <div align="center"><strong>
                                            Tanggal
                                        </strong></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td tabindex="0">
                                    <div align="center">1</div>
                                </td>
                                <td tabindex="-1">IPDS</td>
                                <td tabindex="-1" class="text-wrap">Innas Pelatihan Inda Pemutakhiran Geospasial dan Muatan Wilkerstat</td>
                                <td tabindex="-1">1 Kegiatan</td>
                                <td tabindex="-1">24 Jam</td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1" class="text-center text-wrap">
                                    Belum dinilai
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                            <i class="ti ti-writing-sign"></i>
                                        </a>
                                        <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                            <i class="ti ti-writing-sign"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td tabindex="-1">
                                    <div align="center">2</div>
                                </td>
                                <td tabindex="-1">IPDS</td>
                                <td tabindex="-1" class="text-wrap">Melakukan Kompilasi Hasil Pengolahan Susenas </td>
                                <td tabindex="-1">1 Kegiatan</td>
                                <td tabindex="-1">2 Hari</td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1"></td>
                                <td tabindex="-1" class="text-center text-wrap">
                                    Belum dinilai
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn btn-danger btn-icon" aria-label="Button">
                                            <i class="ti ti-eraser"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td tabindex="-1">
                                    <div align="center">2</div>
                                </td>
                                <td tabindex="-1">IPDS</td>
                                <td class="text-wrap">Pelatihan / Briefing Pengolahan</td>
                                <td tabindex="-1">1 Kegiatan</td>
                                <td tabindex="-1">8 Jam</td>


                                <td tabindex="-1">1 Kegiatan</td>
                                <td tabindex="-1">8 Jam</td>
                                <td tabindex="-1">02</td>
                                <td tabindex="-1" class="text-wrap">Briefing Geotagging dan Suplemen Susenas Maret 2022</td>
                                <td tabindex="-1" class="text-center text-wrap">
                                    Sudah dinilai
                                </td>
                                <td></td>
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
    // window.picker = new Litepicker({
    //     element: document.getElementById('datepicker-inline'),
    //     // inlineMode: true,
    //     // position: "right"
    // });

    // var mydate = luxon.DateTime.fromFormat("Mar 2 1982", "LLL d yyyy").setLocale('id').toFormat("dd MMMM yyyy")
    // console.log(mydate)

    // window.ready(() => {
    var vanilaSheet = document.querySelector("#vanilla-spreadsheet")

    var KEYCODE = {
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        DOWN: 40,
        ENTER: 13,
        // TAB: 18,

    };

    function onKeyDown(event) {
        // console.log(event.keyCode)
        switch (event.keyCode) {
            case KEYCODE.RIGHT:
                event.preventDefault();
                focusNextItem();
                break;
            case KEYCODE.LEFT:
                event.preventDefault();
                focusPreviousItem();
                break;
            case KEYCODE.DOWN:
                event.preventDefault();
                focusNextRow();
                break;
            case KEYCODE.UP:
                event.preventDefault();
                focusPreviousRow();
                break;
            case KEYCODE.ENTER:
                event.preventDefault();
                focusActionItem();
                break;
                // case KEYCODE.TAB:
                //     event.preventDefault();
                //     break;
        }
    }

    function onClick(event) {
        // Make sure the clicked item is one of the buttons and
        // not something random :)
        var td = [...vanilaSheet.querySelectorAll("tr td[tabIndex]")];
        // console.log(td)
        if (td.indexOf(event.target) == -1) {
            return;
        }
        cellActivate(event.target);
    }

    function focusNextItem() {
        var item = document.activeElement;
        if (item.nextElementSibling) {
            var td = [...vanilaSheet.querySelectorAll("tr td[tabIndex]")];
            if (td.indexOf(item.nextElementSibling) == -1) {
                return;
            }
            cellActivate(item.nextElementSibling);
        }
    }

    function focusPreviousItem() {
        var item = document.activeElement;
        if (item.previousElementSibling) {
            cellActivate(item.previousElementSibling);
        }
    }

    function focusNextRow() {
        window.dael = document.activeElement;
        var item = document.activeElement.parentElement;
        if (item.nextElementSibling) {
            var tr = [...item.querySelectorAll("td[tabIndex]")]
            var indexOfActiveElement = tr.indexOf(document.activeElement)
            console.log(indexOfActiveElement)
            cellActivate(item.nextElementSibling.children[indexOfActiveElement]);
        }
    }

    function focusPreviousRow() {
        var item = document.activeElement.parentElement;
        if (item.previousElementSibling) {
            var tr = [...item.querySelectorAll("td[tabIndex]")]
            var indexOfActiveElement = tr.indexOf(document.activeElement)
            console.log(indexOfActiveElement)
            cellActivate(item.previousElementSibling.children[indexOfActiveElement]);
        }
    }

    function focusActionItem() {
        vanilaSheet.querySelectorAll("tr td[tabIndex]").forEach((td) => (td.tabIndex = -1));

        var item = document.activeElement;
        console.log(item.parentElement.querySelector(".btn"))
        item.parentElement.querySelector(".btn").focus()
    }

    // This is where the roving tabindex magic happens!
    function cellActivate(item) {
        // Set all of the buttons to tabindex -1
        vanilaSheet.querySelectorAll("tr td[tabIndex]").forEach((td) => (td.tabIndex = -1));
        // Make the current button "active"
        item.tabIndex = 0;
        item.focus();
    }

    vanilaSheet.addEventListener("keydown", onKeyDown);
    vanilaSheet.addEventListener("click", onClick);
    // })
</script>