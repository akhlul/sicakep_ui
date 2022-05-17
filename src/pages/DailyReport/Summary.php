<?php

use Moment\Moment;

// $mom = new Moment();

// $arr_holidays = [
//     '2022-01-01',   // Tahun Baru
//     '2022-02-01',   // Imlek
//     '2022-02-28',   // Isra Miraj
//     '2022-03-03',   // Nyepi
//     '2022-04-15',   // Wafat Yesus Kristus
//     '2022-04-29',   // Hari Raya Idul Fitri
//     '2022-05-01',
//     '2022-05-02',
//     '2022-05-03',
//     '2022-05-04',
//     '2022-05-05',
//     '2022-05-06',
//     '2022-05-16',   // Waisak
//     '2022-05-26',   // Kenaikan Yesus Kristus
//     '2022-08-17',   // 17 Agustus
// ];

// $start_day_of_the_month = $mom->getPeriod('month')->getStartDate();
// $moment_days = $start_day_of_the_month->getMomentsByWeekdays([1,2,3,4,5], 6);
// $n_month = $mom->getPeriod('month')->getEndDate()->format('n');

// $arr_days = [];
// foreach ($moment_days as $day) {
//     $str_day = $day->format("Y-m-d");
//     if ($n_month !== $day->format('n')) break;
//     if (in_array($str_day, $arr_holidays)) continue;
//     $arr_days[] = $str_day;
// }

function generate_bulan_absen($tanggal_Ymd) {
    Moment::setLocale('id_ID');
    $mom2 = new Moment($tanggal_Ymd);

    $arr_holidays = [
        '2022-01-01',   // Tahun Baru
        '2022-02-01',   // Imlek
        '2022-02-28',   // Isra Miraj
        '2022-03-03',   // Nyepi
        '2022-04-15',   // Wafat Yesus Kristus
        '2022-04-29',   // Hari Raya Idul Fitri
        '2022-05-01',
        '2022-05-02',
        '2022-05-03',
        '2022-05-04',
        '2022-05-05',
        '2022-05-06',
        '2022-05-16',   // Waisak
        '2022-05-26',   // Kenaikan Yesus Kristus
        '2022-08-17',   // 17 Agustus
    ];

    $start_day_of_the_month = $mom2->getPeriod('month')->getStartDate();
    $moment_days = $start_day_of_the_month->getMomentsByWeekdays([1, 2, 3, 4, 5], 6);
    $n_month = $mom2->getPeriod('month')->getEndDate()->format('n');
    
    $arr_absen = [];
    foreach ($moment_days as $day) {
        $str_day = $day->format("Y-m-d");
        if ($n_month !== $day->format('n')) break;
        if (in_array($str_day, $arr_holidays)) continue;
        $arr_absen[] = [
            $day->format("d F"),            // 01 Januari
            $str_day,                       // 2022-01-01
            "pagi" . ($day->format("dm")),    // pagi0101
            "sore" . ($day->format("dm")),    // sore0101
            "0",
            "0",
            "1",
        ];
    }
    return $arr_absen;
}

$mei = generate_bulan_absen( $app_session->getSet('summary-bulan-absen', '2022-01-01') );

$jmltgl = count($mei);

$qq2 = "SELECT p.id, lf.id_pegawai, jp.wilker,";

for ($a = 0; $a < ($jmltgl - 1); $a++) {
    if ($mei[$a][6] == '0') { //bulan puasa
        $qq2 .= " COUNT(
                    IF(
                        tanggal='" . $mei[$a][1] . "',
                        lf.id_pegawai,
                        null
                    )
                ) AS " . $mei[$a][2] . ",
                ROUND(
                    SUM(
                        IF( satuan_durasi=1 AND tanggal='" . $mei[$a][1] . "',
                            durasi*6.5, 
                            ( IF( satuan_durasi=2 AND tanggal='" . $mei[$a][1] . "',
                                    durasi,
                                    ( IF( satuan_durasi=3 AND tanggal='" . $mei[$a][1] . "',
                                            durasi/60,
                                            0
                                    ) )
                            ) )
                        )
                    ), 2
                ) AS " . $mei[$a][3] . ",";
    } else {
        $qq2 .= " COUNT(
                    IF(
                        tanggal='" . $mei[$a][1] . "',
                        lf.id_pegawai,
                        null
                    )
                ) AS " . $mei[$a][2] . ",
                round( 
                    sum( 
                        if( satuan_durasi=1 and tanggal='" . $mei[$a][1] . "',
                            durasi*7.5,
                            ( if( satuan_durasi=2 and tanggal='" . $mei[$a][1] . "',
                                    durasi,
                                    ( if( satuan_durasi=3 and tanggal='" . $mei[$a][1] . "',
                                            durasi/60,
                                            0
                                    ) )
                            ) )
                        )
                    ), 2
                ) AS " . $mei[$a][3] . ",";
    }
}
$qq2 .= " COUNT(
            IF(
                tanggal='" . $mei[($jmltgl - 1)][1] . "',
                lf.id_pegawai,
                null
            )
        ) AS " . $mei[($jmltgl - 1)][2] . ",
        round( 
            sum( 
                if( satuan_durasi=1 and tanggal='" . $mei[($jmltgl - 1)][1] . "',
                    durasi*7.5,
                    ( if( satuan_durasi=2 and tanggal='" . $mei[($jmltgl - 1)][1] . "',
                            durasi,
                            ( if( satuan_durasi=3 and tanggal='" . $mei[($jmltgl - 1)][1] . "',
                                    durasi/60,
                                    0
                            ) )
                    ) )
                )
            ), 2
        ) AS " . $mei[($jmltgl - 1)][3] . " 
        FROM laporanwfh_2 lf, pegawai p, jabatan_pegawai jp";


// dd($qq2);


$absen_per_pegawai_sql = "";
if ($app_session->get('eselon') <= 4 && $app_session->get('wilker') == '1800') {
    if ($app_session->get('level_user') == 2) {
        $absen_per_pegawai_sql = " SELECT a.*,c.* 
                    FROM (
                        SELECT pg.id AS id2, 
                                pg.nama,substring(jpp.id_jabatan,1,1) AS bidang, 
                                jpp.id_jabatan, jpp.eselon 
                        FROM pegawai pg, jabatan_pegawai jpp 
                        WHERE pg.id=jpp.id_pegawai and jpp.wilker=1800 
                    ) a
                    LEFT JOIN ( 
                        " . $qq2 . " 
                        WHERE p.id=lf.id_pegawai AND 
                            jp.id_pegawai=p.id AND 
                            wilker=1800 
                        GROUP BY lf.id_pegawai
                    ) c
                    ON a.id2=c.id
                    ORDER BY eselon,id_jabatan,nama";
    } else {
        $absen_per_pegawai_sql = " SELECT a.*,c.* 
                    FROM (
                        SELECT pg.id as id2, 
                            pg.nama,substring(jpp.id_jabatan,1,1) as bidang, 
                            jpp.id_jabatan, jpp.eselon 
                        FROM pegawai pg, jabatan_pegawai jpp 
                        WHERE pg.id=jpp.id_pegawai and 
                            jpp.wilker=1800 and 
                            substring(jp.id_jabatan,1,1)=" . $app_session->get('bidang') . "
                    ) a
                    LEFT JOIN ( 
                        " . $qq2 . " 
                        WHERE p.id=lf.id_pegawai AND 
                            jp.id_pegawai=p.id AND 
                            wilker=1800 and substring(jp.id_jabatan,1,1)=" . $app_session->get('bidang') . "
                        group by lf.id_pegawai
                    ) c
                    on a.id2=c.id
                    order by eselon,id_jabatan,nama";
    }
    //        echo $absen_per_pegawai_sql;
} else if ($app_session->get('eselon') <= 4 && $app_session->get('wilker') != '1800') {
    $absen_per_pegawai_sql = " SELECT a.*,c.* 
                FROM (
                    SELECT pg.id as id2, 
                            pg.nama, substring(jpp.id_jabatan,1,1) as bidang, 
                            jpp.id_jabatan, jpp.eselon 
                    from pegawai pg, jabatan_pegawai jpp 
                    WHERE pg.id=jpp.id_pegawai and 
                        jpp.wilker='" . $app_session->get('wilker') . "' 
                ) a
                LEFT JOIN ( 
                    " . $qq2 . " 
                    WHERE p.id=lf.id_pegawai AND 
                        jp.id_pegawai=p.id AND 
                        wilker='" . $app_session->get('wilker') . "'
                    group by lf.id_pegawai
                ) c
                on a.id2=c.id
                order by eselon,id_jabatan,nama";
}
// echo $absen_per_pegawai_sql;
// die();  

$absen_per_pegawai = $db->query($absen_per_pegawai_sql)->fetchAll(PDO::FETCH_OBJ);

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Rekap Laporan Harian - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session,
        'mei' => $mei,
        'jmltgl' => $jmltgl,
        'absen_per_pegawai' => $absen_per_pegawai
    ],
    []
);

echo $templates->render('dailyreport/summary', $data_template);