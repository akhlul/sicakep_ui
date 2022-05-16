<?php

use Moment\Moment;

if (substr($app_session->get('wilker'), 2, 2) == '00') {
    if ($app_session->get('eselon') == 4) {
        if ($app_session->get('level_user') <= 3) {
            $sql = "SELECT * 
					FROM pegawai p, jabatan j, jabatan_pegawai jp 
					WHERE p.id=jp.id_pegawai AND 
							j.id_jabatan=jp.id_jabatan AND 
							substring(wilker,3,2)='00' 
					ORDER BY nama";
        } else {
            $sql = "SELECT * 
					FROM pegawai p, jabatan j, jabatan_pegawai jp 
					WHERE p.id=jp.id_pegawai AND 
							j.id_jabatan=jp.id_jabatan AND 
							substring(wilker,3,2)='00' AND 
							jp.id_jabatan='" . $app_session->get('id_jabatan') . "' AND 
							eselon>=4 
					ORDER BY nama";
        }
    } else if ($app_session->get('eselon') == 3) {
        $sql = "SELECT * 
				FROM pegawai p, jabatan j, jabatan_pegawai jp 
				WHERE p.id=jp.id_pegawai AND 
						j.id_jabatan=jp.id_jabatan AND 
						substring(wilker,3,2)='00' and 
						bidang='" . $app_session->get('bidang') . "' 
						and eselon>=3 
				ORDER BY nama";
    } else if ($app_session->get('eselon') == 2) {
        $sql = "SELECT * 
				FROM pegawai p, jabatan j, jabatan_pegawai jp 
				WHERE p.id=jp.id_pegawai AND 
						j.id_jabatan=jp.id_jabatan AND 
						substring(wilker,3,2)='00' 
						ORDER BY nama";
    } else {
        $sql = "SELECT * 
				FROM pegawai p, jabatan j, jabatan_pegawai jp 
				WHERE p.id=jp.id_pegawai AND 
						j.id_jabatan=jp.id_jabatan AND 
						id='" . $app_session->get('id') . "'";
    }
} else if (substr($app_session->get('wilker'), 2, 2) != '00') {
    if ($app_session->get('level_user') == 3) {
        $sql = "SELECT * 
				FROM pegawai p, jabatan j, jabatan_pegawai jp 
				WHERE p.id=jp.id_pegawai AND 
						j.id_jabatan=jp.id_jabatan AND 
						wilker='" . $app_session->get('wilker') . "' 
				ORDER BY nama";
    } else if ($app_session->get('eselon') == 4) {
        $sql = "SELECT * 
				FROM pegawai p, jabatan j, jabatan_pegawai jp 
				WHERE p.id=jp.id_pegawai AND 
						j.id_jabatan=jp.id_jabatan AND 
						wilker='" . $app_session->get('wilker') . "' AND 
						(
							bidang='" . $app_session->get('bidang') . "' OR bidang=7
						) AND 
						eselon>=4 
				ORDER BY nama";
    } else {
        $sql = "SELECT * 
				FROM pegawai p, jabatan j, jabatan_pegawai jp 
				where p.id=jp.id_pegawai and 
						j.id_jabatan=jp.id_jabatan and 
						id='" . $app_session->get('id') . "'";
    }
}
$stmt = $db->query($sql);
$employees = $stmt->fetchAll(PDO::FETCH_OBJ);
// dd($employees);


// TODO: set dynamic year
$rangelaporan_sql_arr = [
    "and tanggal>='2022-01-01' and tanggal<='2022-01-31'",
    "and tanggal>='2022-02-01' and tanggal<='2022-02-30'",
    "and tanggal>='2022-03-01' and tanggal<='2022-03-31'",
    "and tanggal>='2022-04-01' and tanggal<='2022-04-30'",
    "and tanggal>='2022-05-01' and tanggal<='2022-05-31'",
    "and tanggal>='2022-06-01' and tanggal<='2022-06-30'",
    "and tanggal>='2022-07-01' and tanggal<='2022-07-31'",
    "and tanggal>='2022-08-01' and tanggal<='2022-08-31'",
    "and tanggal>='2022-09-01' and tanggal<='2022-09-30'",
    "and tanggal>='2022-10-01' and tanggal<='2022-10-31'",
    "and tanggal>='2022-11-01' and tanggal<='2022-11-30'",
    "and tanggal>='2022-12-01' and tanggal<='2022-12-31'",
];
$mom = new Moment('now');
// dd($mom);
$ttggll = $rangelaporan_sql_arr[$app_session->getSet('collect-bulan-kegiatan', (int) $mom->getMonth()) - 1];
// $ttggll = $rangelaporan_sql_arr[ 0];
// dd($ttggll);


$sql2 = "SELECT id_laporan, id_pegawai, tanggal, uraian, volume, satuan_volume, 
				durasi, satuan_durasi, pemberi_tugas, status, satuan, nama, waktu 
		FROM (
        	SELECT * FROM laporanwfh_2 wf 
			WHERE id_pegawai='" . $app_session->getSet('collect-id-pegawai', $app_session->get('id')) . "' " . $ttggll . "
		) a 
        LEFT JOIN satuan s ON a.satuan_volume=s.id_satuan 
		LEFT JOIN pegawai pg ON a.pemberi_tugas=pg.id 
        LEFT JOIN satwaktu sw ON a.satuan_durasi=sw.id_satuan_waktu
		ORDER BY tanggal ASC";

$stmt = $db->query($sql2);
$monthly_report = $stmt->fetchAll(PDO::FETCH_OBJ);
// dd($monthly_report);

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Master Pekerjaan - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session,
        'employees' => $employees,
        'monthly_report' => $monthly_report
    ],
    []
);

echo $templates->render('dailyreport/collection', $data_template);