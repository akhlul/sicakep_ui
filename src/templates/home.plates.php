<?php $this->layout('base::base', $head);
?>

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    /
                </div>
                <h2 class="page-title">
                    Beranda
                </h2>
            </div>
            <!-- Page title actions -->
            <!-- <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-white">
                            New view
                        </a>
                    </span>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                        <i class="ti ti-plus"></i>
                        Create new report
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                        <i class="ti ti-plus"></i>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">

            <div class="col-12 alert alert-warning" role="alert">
                Sistem masih pada tahapan re-impementasi. Sistem akan dilakukan perbaikan secara bertahap. Mohon maaf atas ketidaknyamanannya.
            </div>

            <!-- <div class="col-12">
                <div class="row row-cards">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="text-white bg-blue avatar">
                                            <i class="fs-1 ti ti-currency-dollar"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            132 Sales
                                        </div>
                                        <div class="text-muted">
                                            12 waiting payments
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="text-white bg-green avatar">
                                            <i class="fs-1 ti ti-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            78 Orders
                                        </div>
                                        <div class="text-muted">
                                            32 shipped
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="text-white bg-twitter avatar">
                                            <i class="fs-1 ti ti-brand-twitter"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            623 Shares </div>
                                        <div class="text-muted">
                                            16 today
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="text-white bg-facebook avatar">
                                            <i class="fs-1 ti ti-brand-facebook"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            132 Likes
                                        </div>
                                        <div class="text-muted">
                                            21 today
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">
                            Jumlah Pekerjaan, Realisasi, dan DL</h3>
                        <div id="chart-pekerjaan-realisasi-dl" class="chart-lg" style="min-height: 240px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Jumlah pegawai</h3>
                        <div id="chart-jumlah-pegawai" class="chart-lg" style="min-height: 240px;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
//  $result_cols = [
//         "labels" => [],
//         "pekerjaan_per_peg" => [],
//         "realisasi_per_peg" => [],
//         "dl_per_peg" => [],
//     ];

document.addEventListener("DOMContentLoaded", async function() {
    const response = await fetch('/api/chart?type=getJumlahPekerjaanPerKako&tahun=2022&bulan=01')
    const resData = (await response.json()).data
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-pekerjaan-realisasi-dl'), {
        chart: {
            type: 'bar',
            height: 430,
        },
        fill: {
            opacity: 1,
        },
        stroke: {
            width: 2,
            lineCap: "round",
            curve: "straight",
        },
        series: [{
                name: "Rata-rata Pekerjaan per Pegawai",
                data: resData.pekerjaan_per_peg
            },
            {
                name: "Rata-rata Realisasi per Pegawai",
                data: resData.realisasi_per_peg
            },
            {
                name: "Rata-rata DL per Pegawai",
                data: resData.dl_per_peg
            }
        ],
        plotOptions: {
            bar: {
                horizontal: false,
                dataLabels: {
                    position: 'top',
                },
            },
        },
        dataLabels: {
            enabled: true,
            offsetY: -20,
            style: {
                fontSize: '10px',
                colors: ['#1e293b']
            },
        },
        grid: {
            padding: {
                top: -20,
                right: 0,
                left: -4,
                bottom: -4
            },
            strokeDashArray: 4,
        },
        xaxis: {
            categories: resData.labels,
        },
        yaxis: {
            labels: {
                padding: 4
            },
        },
        legend: {
            show: true,
            position: 'bottom',
            offsetY: 12,
            markers: {
                width: 10,
                height: 10,
                radius: 100,
            },
            itemMargin: {
                horizontal: 8,
                vertical: 8
            },
        },
    })).render();
});
</script>
<script>
document.addEventListener("DOMContentLoaded", async function() {
    const response = await fetch('/api/chart?type=getJumlahPegawaiPerKako')
    const resData = (await response.json()).data
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-jumlah-pegawai'), {
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
        },
        fill: {
            opacity: 1,
        },
        stroke: {
            width: 2,
            lineCap: "round",
            curve: "straight",
        },
        series: [{
                name: "Laki-laki",
                data: resData.perempuan
                // data: [43, 21, 18, 15, 25, 23, 16, 15, 13, 16, 9, 9, 12, 20, 8]
            },
            {
                name: "Perempuan",
                data: resData.laki
                // data: [46, 11, 8, 10, 6, 9, 10, 4, 10, 10, 10, 5, 4, 16, 12]
            }
        ],
        plotOptions: {
            bar: {
                horizontal: true,
            },
        },
        grid: {
            padding: {
                top: -20,
                right: 0,
                left: -4,
                bottom: -4
            },
            strokeDashArray: 4,
        },
        xaxis: {
            categories: resData.labels,
            // categories: ["1800", "1801", "1802", "1803", "1804", "1805", "1806", "1807", "1808", "1809", "1810", "1811", "1812", "1871", "1872"],
            labels: {
                formatter: function(val) {
                    return val + " orang"
                }
            }
        },
        yaxis: {
            labels: {
                padding: 4
            },
        },
        colors: ["#fab005", "#5eba00", "#206bc4"],
        legend: {
            show: true,
            position: 'bottom',
            offsetY: 12,
            markers: {
                width: 10,
                height: 10,
                radius: 100,
            },
            itemMargin: {
                horizontal: 8,
                vertical: 8
            },
        },
    })).render();
});
</script>