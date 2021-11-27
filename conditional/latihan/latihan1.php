<?php
$helm = "ada";
$stnk = "ada";
$sim = "ada";

if ($helm == "ada" && $stnk == "tidak ada" && $sim == "tidak ada") {
    echo "Kami cek perlengkapan surat stnk & sim nya";
}elseif ($helm == "ada" && $stnk == "ada" && $sim == "tidak ada") {
    echo "surat lengkap boleh kami cek sim nya?";
}elseif ($helm == "ada" && $stnk == "ada" && $sim == "ada") {
    echo "selamat berkendara hati hati di jalan";
}else {
    echo "maaf anda kami tilang";
}

?>