<?php

function tgljam_indo($tanggal)
{
  $bulan = array(
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $date1 = explode('-', $tanggal);
  $date2 = explode(' ', $date1[2]);
  $time = explode(' ', $tanggal);

  // variabel pecahkan 0 = tahun
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tanggal

  return $date2[0] . ' ' . $bulan[(int)$date1[1]] . ' ' . $date1[0] . ' ' . $time[1];
}
