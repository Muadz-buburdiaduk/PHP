<?php
$kondisiMotor = false;
$kondisiBukhori = true;

if ( $kondisiMotor && $kondisiBukhori == true ) {
    echo "Bukhori berangkat ke sekolah pakai motor";
}

elseif ( ! $kondisiMotor && $kondisiBukhori ) {
    echo "Bukhori tidak pergi ke sekolah";
}