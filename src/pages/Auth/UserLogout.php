<?php

$app_session->destroy();

$app_session->setFlash("message", "Anda telah keluar dari aplikasi.");

redirect('/login');