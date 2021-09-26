<?php 
$koneksi = mysqli_connect("localhost", "root", "", "vsgauji");

// membuat fungsi query dalam bentuk array
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
} 

?>