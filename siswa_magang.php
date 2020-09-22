<?php

$data_siswa=[];






while(true)
{
    //data siswa
    $siswa=&$data_siswa;

    //banner aplikasi

     tampil("Data Siswa Magang Top");
     tampil("=============================");

    //User input data siswa magang

    $input_siswa=readline("Masukkan data siswa?");

    //validasi huruf
    if(!preg_match("/^[a-zA-Z]*$/", $input_siswa))
    {
        echo PHP_EOL;
        echo "Tolong Masukkan Character Huruf!\n";
        continue;
    }

    
    $siswa[]=$input_siswa;

    //munculkan data siswa magang
    $nomor=1;


    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }

    //menanyakan user ingin lanjutkan atau tidak
    tanyaUser();
    
}







function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya=readline("Tambah data? (yes/no)");

    if($tanya=="no" || $tanya!=="yes")
    {
        tampil("Data Anda Telah Terekam");
    exit;
    }
}


?>