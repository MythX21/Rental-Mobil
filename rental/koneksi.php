<?php
$konek = mysqli_connect("localhost","root", "", "rental");
if (mysqli_connect_error()){
    echo  "Connection Error " . mysqli_connect_error();
}
