<?php

require_once 'identitas.php';

$identitas1 = new identitas ('Fahmi','Bandung','XII RPL2','Single');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';

$identitas1 = new identitas ('Hasanudin','Jakarta','XI TKJ2','Berpacaran');
echo "nama :".$identitas1->get_nama() . '<br>';
echo "tempatlahir :".$identitas1->get_tempatlahir() . '<br>';
echo "kelas :".$identitas1->get_kelas() . '<br>';
echo "status :".$identitas1->get_status() . '<br>'.'<br>';


?>