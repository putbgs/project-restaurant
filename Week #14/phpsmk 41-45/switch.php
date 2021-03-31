<?php

// $hari = 1;

// switch ($hari) {
//     case 1:
//         echo 'Minggu';
//         break;
//     case 2:
//         echo 'Senin';
//         break;
//     case 3:
//         echo 'Selasa';
//         break;

//     default:
//         echo 'hari belum dibuat';
//         break;
// }


$pilihan = 'tambah';

switch ($pilihan) {
    case 'tambah':
        echo 'anda memmilih tambah';
        break;
    case 'ubah':
        echo 'anda memmilih ubah';
        break;
    case 'hapus':
        echo 'anda memmilih hapus';
        break;

    default:
        echo 'pilihan belum ada';
        break;
}
