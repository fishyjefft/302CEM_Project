<?php

require('../Engine/SessionManager.php');

$Sess = new SessionManager();
$Sess->StartSession();
$Sess->CreateSession();

$Sess->DeleteSession();

header('Location: ../');
exit();
