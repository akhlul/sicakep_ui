<?php

$stmt = $db->prepare(
    'SELECT * 
    FROM pegawai p, jabatan j, level_user l, jabatan_pegawai jp
    WHERE p.id=jp.id_pegawai 
        AND j.id_jabatan=jp.id_jabatan 
        AND username = :username 
        AND password = :password 
        AND p.level_user=l.id_level_user'
);

$stmt->execute([
    'username' => $_POST['username'],
    'password' => $_POST['password']
]);
// $user = $stmt->fetchAll();
$result = $stmt->fetch();

// if user found
if ($result) {
    // convert result to object
    $user = (object) $result;
    // add auth sessions

    $avatar = "https://community.bps.go.id/images/avatar/" . $user->aktif;
    $app_session->set([
        "username" => $user->username,
        "id" => $user->id,
        "nama" => $user->nama,
        "id_jabatan" => $user->id_jabatan,
        "jabatan" => $user->jabatan,
        "bidang" => $user->bidang,
        "eselon" => $user->eselon,
        "level_wilayah" => $user->level_wilayah,
        "level_jabatan" => $user->level_jabatan,
        "level_user" => $user->level_user,
        "wilker" => $user->wilker,
        "foto" => $avatar,
    ]);


    // add logs
    $stmt = $db->prepare(
        'INSERT INTO logs 
        VALUES (null, :username, :date, :remote_address)'
    )->execute([
        'username' => $app_session->get('username'),
        'date' => date("Y-m-d H:i:s"),
        'remote_address' => $_SERVER['REMOTE_ADDR']
    ]);

    // echo PdoDebugger::show(
    //     'INSERT INTO logs 
    //     VALUES (null, :username, :date, :remote_address)',
    //     [
    //         'username' => $app_session->get('username'),
    //         'date' => date("Y-m-d H:i:s"),
    //         'remote_address' => $_SERVER['REMOTE_ADDR']
    //     ]
    // );


    redirect('/home');
} else {
    $app_session->setFlash("message", "Pengguna tidak dapat ditemukan, cek kembali username & password");
    redirect('/login');
}


// $app_session->destroy();