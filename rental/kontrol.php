<?php
if (isset($_GET['x'])) {
    switch ($_GET['x']) {
        case 'keluar':
            include("keluar.php");
            break;
        case 'admin':
            include("admin.php");
            break;
        case 'tadmin':
            include("tadmin.php");
            break;
        case 'sadmin':
            include("sadmin.php");
            break;
        case 'hadmin':
            include("hadmin.php");
            break;
        case 'eadmin':
            include("eadmin.php");
            break;
        case 'uadmin':
            include("uadmin.php");
            break;
        case 'mobil':
            include("mobil.php");
            break;
        case 'tmobil':
            include("tmobil.php");
            break;
        case 'smobil':
            include("smobil.php");
            break;
        case 'hmobil':
            include("hmobil.php");
            break;
        case 'emobil':
            include("emobil.php");
            break;
        case 'umobil':
            include("umobil.php");
            break;
        case 'order':
            include("order.php");
            break;
        case 'torder':
            include("torder.php");
            break;
        case 'sorder':
            include("sorder.php");
            break;
        case 'horder':
            include("horder.php");
            break;
        case 'rmobil':
            include("rmobil.php");
            break;
        case 'crmobil':
            include("crmobil.php");
            break;
        case 'rorder':
            include("rorder.php");
            break;
        case 'crorder':
            include("crorder.php");
            break;
    }
} else {
    echo "<h3>Rental Mobil T4Q</h3>
    <h4>Rental Mobil Mulai dari Rp300.000,00</h2>
    <h4>BBM Full+Mobil diatas Tahun 2015</h2>";

}
?>