<?php $this->layout('base::base', $head);
?>

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Presensi
                </div>
                <h2 class="page-title">
                    Import dari Kaizala
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
            <div class="col-sm-12">
                <!-- Detail Pelapor/Pengguna -->
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Pelapor</h3>
                    </div> -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="datepicker-inline" name="tgl_kegiatan" value="">
                            <!-- <div class="datepicker-inline" id="datepicker-inline"></div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Import Presensi</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <!-- Detail Pelapor/Pengguna -->
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Pelapor</h3>
                    </div> -->
                    <div class="card-body">
                        <pre>340018428 - Aatina Izzati Penta Harnowati SE, Ms.Ak datang --> 2022-3-1 06:18:11 pulang --> 2022-3-1 16:04:41
340016495 - Agung Erianto Juliandono, SST datang --> 2022-3-1 06:16:28 pulang --> 2022-3-1 16:58:12
340058566 - Ahlul Karom S.Tr.Stat. datang --> 2022-3-1 06:54:26 pulang --> 2022-3-1 16:31:48
340061058 - Ajeng Miftahul Hasanah datang --> 2022-3-1 07:09:17 pulang --> 2022-3-1 18:07:41
340051034 - Andrawina Susanto S.Si datang --> 2022-3-1 06:28:43 pulang --> 2022-3-1 16:09:33
340055674 - Anggia Wulandari Harahap S.Psi datang --> 2022-3-1 06:51:15 pulang --> 2022-3-1 16:03:34
340056992 - Annisa Nur Islami Warrohmah SST datang --> -- pulang --> --
340057926 - Arief Rahmanda Al-Mursyid SST datang --> 2022-3-1 06:32:02 pulang --> 2022-3-1 16:12:35
340054279 - Arifin Jafar SST datang --> -- pulang --> --
340051053 - Arip Purwanto A.Md datang --> 2022-3-1 06:23:12 pulang --> 2022-3-1 16:15:03
340014977 - Atik Heriyandani SE datang --> 2022-3-1 07:16:32 pulang --> 2022-3-1 16:07:38
340017168 - Bayu Juniardi SE datang --> 2022-3-1 06:32:17 pulang --> 2022-3-1 16:05:21
340050041 - Bayu Prasetyo SST, M.Si. datang --> 2022-3-1 06:39:16 pulang --> 2022-3-1 16:22:56
340020079 - Clara Tridiana, SST, MSE datang --> 2022-3-1 06:41:27 pulang --> 2022-3-1 16:06:26
999060570 - Dea Anisa Irawan datang --> 2022-3-1 06:24:21 pulang --> 2022-3-1 16:09:17
340055754 - Desliyani Tri Wandita SST datang --> 2022-3-1 06:21:48 pulang --> 2022-3-1 16:03:52
340019460 - Desyana Khotiah datang --> 2022-3-1 06:53:02 pulang --> 2022-3-1 16:12:55
340016231 - Dewi Wahyuningsih SST., M.Si datang --> 2022-3-1 06:14:09 pulang --> 2022-3-1 16:02:21
340015573 - Dhyantanu Harsa SST.,MM datang --> 2022-3-1 06:35:42 pulang --> 2022-3-1 16:14:48
340015135 - Drisnaf Swastyardi, S.Si MSE, MA. datang --> 2022-3-1 06:27:16 pulang --> 2022-3-1 16:08:53
739999999 - Eka Yusda SE datang --> 2022-3-1 06:26:05 pulang --> 2022-3-1 16:12:37
340056266 - Eko Teguh Widodo SST datang --> 2022-3-1 07:10:01 pulang --> 2022-3-1 16:16:54
340015735 - Emmayati S.Si. datang --> 2022-3-1 06:50:25 pulang --> 2022-3-1 16:08:05
340011813 - Endang Retno Sri Subiyandani S.Si, M.M. datang --> 2022-3-1 07:19:12 pulang --> 2022-3-1 16:14:49
340054782 - Erika Haryulistiani Saksono SE. datang --> 2022-3-1 06:20:27 pulang --> 2022-3-1 16:09:42
999060623 - Fadheel Wisnu datang --> 2022-3-1 06:11:39 pulang --> 2022-3-1 16:10:55
340017329 - Febiyana Qomariyah SST.,M.M. datang --> 2022-3-1 06:21:12 pulang --> 2022-3-1 16:03:16
340054784 - Firna Novi Anggoro SH, M.H. datang --> 2022-3-1 06:13:58 pulang --> 2022-3-1 16:27:40
340054786 - Fransiska Suryani A.Md. datang --> 2022-3-1 07:02:53 pulang --> 2022-3-1 16:19:31
340015810 - Gita Yudianingsih S.Si datang --> 2022-3-1 06:12:43 pulang --> 2022-3-1 16:04:30
340051147 - Gun Gun Nugraha S.Si, M.S.E datang --> 2022-3-1 06:47:18 pulang --> 2022-3-1 16:18:47
340051152 - Hardianty S.Si datang --> 2022-3-1 06:35:03 pulang --> 2022-3-1 16:27:42
340016258 - Henny Surya Indraswari SST.,M.Si datang --> 2022-3-1 06:12:34 pulang --> 2022-3-1 16:11:06
340019734 - Herman datang --> 2022-3-1 06:48:53 pulang --> 2022-3-1 16:28:55
340052117 - Heru Wijayanto datang --> 2022-3-1 06:15:44 pulang --> 2022-3-1 16:14:26
340057414 - Hesty Ayuningtiyas, SST datang --> 2022-3-1 06:49:20 pulang --> 2022-3-1 16:07:29
340014908 - Ir. Dhani Sukaryanti datang --> 2022-3-1 07:05:19 pulang --> 2022-3-1 16:30:03
340013848 - Ir. Dwiyana S M.M datang --> 2022-3-1 06:30:11 pulang --> 2022-3-1 16:43:41
340013629 - Ir. Nurul Andriana datang --> 2022-3-1 06:54:50 pulang --> 2022-3-1 16:34:21
340013846 - Ir. Sri Rezkie Desmawati ME datang --> 2022-3-1 08:04:27 pulang --> 2022-3-1 16:14:23
340013841 - Ir. Sudarti datang --> 2022-3-1 06:12:05 pulang --> 2022-3-1 16:04:12
340013284 - Ir. Wagiman Purwoko datang --> 2022-3-1 06:34:22 pulang --> 2022-3-1 17:49:32
340057430 - Irvan Patuan Marsahala Simamora SST datang --> 2022-3-1 06:51:33 pulang --> 2022-3-1 19:29:31
340012700 - Jafri datang --> 2022-3-1 07:05:27 pulang --> 2022-3-1 16:07:39
340012939 - John Knedi S.Si, MM datang --> 2022-3-1 06:44:55 pulang --> 2022-3-1 16:37:52
340016487 - Jua Mahardhika SST datang --> 2022-3-1 06:10:18 pulang --> 2022-3-1 16:14:48
340019178 - K. Nurika Damayanti SST., M.Stat. datang --> 2022-3-1 06:18:37 pulang --> 2022-3-1 16:04:32
340054794 - Luxmaning Hutaki Widiastari S.Psi datang --> -- pulang --> --
340051214 - M.E. Ivan Sihaloho A.Md datang --> -- pulang --> --
340015952 - Mas ud Rifai SST datang --> -- pulang --> --
340019183 - Maya Narang Ali SST datang --> 2022-3-1 06:43:12 pulang --> 2022-3-1 16:35:35
340052195 - Maya Puspa Hati datang --> 2022-3-1 06:34:33 pulang --> 2022-3-1 16:08:53
340016135 - Mega Astuti SST datang --> 2022-3-1 07:18:21 pulang --> 2022-3-1 16:22:16
999060733 - Meiru Rezki datang --> 2022-3-1 06:08:54 pulang --> 2022-3-1 16:08:19
340018385 - Mertha Pessela SP, M.M. datang --> 2022-3-1 06:39:52 pulang --> 2022-3-1 16:13:53
340017315 - Moviyanti SST, M.Si datang --> 2022-3-1 06:19:34 pulang --> 2022-3-1 16:02:25
340015134 - Mudjono B.St datang --> 2022-3-1 06:50:04 pulang --> 2022-3-1 16:12:16
340015752 - Muhammad Ilham Salam SST,M.Stat datang --> 2022-3-1 06:21:45 pulang --> 2022-3-1 16:05:13
340016118 - Muhammad Ridwan SST datang --> 2022-3-1 06:35:20 pulang --> 2022-3-1 16:08:50
340057701 - Muhammad Sabiel Adi Prakasa SST datang --> -- pulang --> --
340059201 - Muhammad Shalih S.Stat. datang --> 2022-3-1 06:19:48 pulang --> 2022-3-1 16:06:06
340057702 - Mukhlis SST datang --> 2022-3-1 06:24:56 pulang --> 2022-3-1 16:18:32
340059666 - Nanto Dwi Cahyo S.Tr.Stat. datang --> 2022-3-1 07:01:44 pulang --> 2022-3-1 16:05:22
340054797 - Nur Hendra Sunaryo A.Md datang --> 2022-3-1 06:41:05 pulang --> 2022-3-1 17:03:59
340013041 - Nur Indah SE datang --> 2022-3-1 06:28:57 pulang --> 2022-3-1 16:45:51
340050191 - Nurdiansyah SST datang --> -- pulang --> --
340015494 - Nurjanah S.Si, MT datang --> 2022-3-1 07:06:48 pulang --> 2022-3-1 17:09:02
340013870 - Poniran datang --> 2022-3-1 06:54:44 pulang --> 2022-3-1 16:09:31
340054800 - Prabudi Dharma A.Md datang --> 2022-3-1 06:16:54 pulang --> 2022-3-1 16:59:34
340018397 - Radika Trianda SE datang --> 2022-3-1 07:01:09 pulang --> 2022-3-1 17:28:05
340054405 - Ratna Kusuma Ningrum S.Si datang --> -- pulang --> --
340061118 - Ricardo Tampubolon datang --> 2022-3-1 07:00:10 pulang --> 2022-3-1 16:18:23
340011683 - Riduan M.Si. datang --> 2022-3-1 06:25:46 pulang --> 2022-3-1 16:12:28
340053599 - Risma Arisandi, A.Md datang --> 2022-3-1 06:16:36 pulang --> 2022-3-1 16:33:11
340018528 - Rochayatini SE datang --> 2022-3-1 06:35:24 pulang --> 2022-3-1 16:13:06
340015570 - Santi Novitasari SE datang --> 2022-3-1 06:05:43 pulang --> 2022-3-1 17:07:06
340053031 - Singgih Adiwijaya datang --> 2022-3-1 06:31:18 pulang --> 2022-3-1 16:07:29
340018349 - Soleh A.Md datang --> 2022-3-1 07:04:12 pulang --> 2022-3-1 16:13:06
340013742 - Sudiyanto S.Si., MM datang --> 2022-3-1 07:05 pulang --> 2022-3-1 16:32
340011341 - Sumapto datang --> 2022-3-1 07:12:11 pulang --> 2022-3-1 16:07:49
340012637 - Supian SE. datang --> 2022-3-1 06:42:01 pulang --> 2022-3-1 16:19:12
340012732 - Sutikno SE datang --> 2022-3-1 07:21:08 pulang --> 2022-3-1 17:11:09
999060929 - Syifa Rizqi datang --> 2022-3-1 06:10:18 pulang --> 2022-3-1 16:24:50
340057614 - Teta Puti Sugesti SST datang --> 2022-3-1 06:26:20 pulang --> 2022-3-1 16:02:45
340017775 - Tri Apriliya datang --> 2022-3-1 06:21:45 pulang --> 2022-3-1 16:35:43
340016005 - Tribuana Kartikasari S.Si, MSE datang --> 2022-3-1 06:19:21 pulang --> 2022-3-1 16:12:38
340057823 - Viamanda Izzania Putri SST datang --> 2022-3-1 06:16:35 pulang --> 2022-3-1 16:10:06
340019160 - Wike Yulia SST datang --> 2022-3-1 07:06:10 pulang --> 2022-3-1 16:17:31
340017536 - Wikki Wildana datang --> 2022-3-1 06:11:29 pulang --> 2022-3-1 16:12:51
340017860 - Yeni Agustiawati SST datang --> 2022-3-1 06:55:13 pulang --> 2022-3-1 16:06:18
340015737 - Yosep SST., MA. datang --> 2022-3-1 06:16:42 pulang --> 2022-3-1 17:13:41
340015571 - Yudi Purwanto datang --> 2022-3-1 06:39:54 pulang --> 2022-3-1 16:09:13
340012451 - Yuniarsih SE. datang --> 2022-3-1 06:59:14 pulang --> 2022-3-1 16:34:44
999060976 - Zaza Y Perwira datang --> 2022-3-1 06:50:51 pulang --> 2022-3-1 16:13:30
340059205 - Zulfiana Nurul Lathifah S.Si. datang --> 2022-3-1 06:45:33 pulang --> 2022-3-1 16:17:54
                        </pre>
                    </div>
                </div>
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