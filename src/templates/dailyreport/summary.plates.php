<?php $this->layout('base::base', $head);
?>

<style>
.bg-gray-100 {
    color: #fff !important;
    background: var(--tblr-gray-100) !important;
}

.bg-gray-200 {
    color: #fff !important;
    background: var(--tblr-gray-200) !important;
}
</style>

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
                    Rekapitulasi Laporan Harian Per Bulan
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-fluid">
        <div class="card">
            <form class="card-header">
                <div class="row g-2">
                    <div class="col-12 col-md-auto">
                        <div class="input-group">
                            <span class="input-group-text" for="input-select-bulan">
                                <i class="ti ti-calendar-time"></i>
                            </span>
                            <select name="summary-bulan-absen" class="input form-select" id="input-select-bulan" placeholder="Pilih bulan...">
                                <option value="2022-01-01" <?= $this->compare("2022-01-01", $session->get('summary-bulan-absen'), "selected") ?>>Januari</option>
                                <option value="2022-02-01" <?= $this->compare("2022-02-01", $session->get('summary-bulan-absen'), "selected") ?>>Februari</option>
                                <option value="2022-03-01" <?= $this->compare("2022-03-01", $session->get('summary-bulan-absen'), "selected") ?>>Maret</option>
                                <option value="2022-04-01" <?= $this->compare("2022-04-01", $session->get('summary-bulan-absen'), "selected") ?>>April</option>
                                <option value="2022-05-01" <?= $this->compare("2022-05-01", $session->get('summary-bulan-absen'), "selected") ?>>Mei</option>
                                <option value="2022-06-01" <?= $this->compare("2022-06-01", $session->get('summary-bulan-absen'), "selected") ?>>Juni</option>
                                <option value="2022-07-01" <?= $this->compare("2022-07-01", $session->get('summary-bulan-absen'), "selected") ?>>Juli</option>
                                <option value="2022-08-01" <?= $this->compare("2022-08-01", $session->get('summary-bulan-absen'), "selected") ?>>Agustus</option>
                                <option value="2022-09-01" <?= $this->compare("2022-09-01", $session->get('summary-bulan-absen'), "selected") ?>>September</option>
                                <option value="2022-10-01" <?= $this->compare("2022-10-01", $session->get('summary-bulan-absen'), "selected") ?>>Oktober</option>
                                <option value="2022-11-01" <?= $this->compare("2022-11-01", $session->get('summary-bulan-absen'), "selected") ?>>November</option>
                                <option value="2022-12-01" <?= $this->compare("2022-12-01", $session->get('summary-bulan-absen'), "selected") ?>>Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-actions d-none d-sm-block">
                    <button type="submit" class="btn btn-primary btn-icon">
                        <i class="pe-2 ti ti-eye"></i>
                        Rekap
                    </button>
                </div>
            </form>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter table-nowrap">
                    </table>
                    <table class="table table-bordered table-condensed tableFixHead">
                        <thead>
                            <tr>
                                <th class="text-center align-middle" rowspan="2">No</th>
                                <th class="text-center align-middle" rowspan="2">NIP</th>
                                <th class="text-center align-middle" rowspan="2">Nama</th>
                                <?php // Loop tanggal
                                for ($a = 0; $a < count($mei); $a++) : ?>
                                <th class="text-center align-middle" colspan="2" nowrap> ><?= $mei[$a][0] ?></th>
                                <?php endfor ?>
                            </tr>
                            <tr>
                                <?php // Loop tanggal
                                for ($a = 0; $a < count($mei); $a++) : ?>
                                <td class="text-center align-middle tooltip-jml-pekerjaan" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jumlah pekerjaan">
                                    <i class="ti ti-tallymarks"></i>
                                </td>
                                <td class="text-center align-middle tooltip-jml-laporan" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jumlah laporan">
                                    <i class="ti ti-hourglass-high"></i>
                                </td>
                                <?php endfor ?>
                            </tr>
                            <tr>
                                <td>
                                    <div align="center"><small>(1)</small></div>
                                </td>
                                <td>
                                    <div align="center"><small>(2)</small></div>
                                </td>
                                <td>
                                    <div align="center"><small>(3)</small></div>
                                </td>
                                <?php // Loop tanggal
                                for ($a = 0; $a < count($mei); $a++) : ?>
                                <td colspan="2" class="text-center"><small>(<?= ($a + 4) ?>)</small></td>
                                <?php endfor ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($absen_per_pegawai as $idx => $obj2) {
                                echo "
                                        <tr>
                                            <td class='text-center'>" . $idx . "</td>
                                            <td>" . $obj2->id . "</td>
                                            <td nowrap>" . $obj2->nama . "</td>";

                                for ($a = 0; $a < $jmltgl; $a++) {
                                    $pagi = $mei[$a][2];
                                    $sore = $mei[$a][3];
                                    if ($obj2->$pagi <= 0) {
                                        echo "<td class='text-center bg-gray-100'>" . $obj2->$pagi . "</td>";
                                    } else {
                                        echo "<td class='text-center'>" . $obj2->$pagi . "</td>";
                                    }
                                    if ($obj2->$sore <= 0) {
                                        echo "<td class='text-center bg-gray-200'>" . $obj2->$sore . "</td>";
                                    } else {
                                        echo "<td class='text-center'>" . $obj2->$sore . "</td>";
                                    }
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<template id="tooltip-jml-pekerjaan">
    Jumlah pekerjaan
</template>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script>
const tooltipTriggerJmlPekerjaan = [].slice.call(document.querySelectorAll('.tooltip-jml-pekerjaan'));
const tooltipJmlPekerjaan = document.querySelector('#tooltip-jml-pekerjaan');

// Pass the button, the tooltip, and some options, and Popper will do the
// magic positioning for you:
tooltipTriggerJmlPekerjaan.map((el) => {
    Popper.createPopper(el, "Jumlah pekerjaan", {
        placement: 'right',
    });
})
</script>