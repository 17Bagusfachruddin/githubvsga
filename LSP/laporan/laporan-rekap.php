<?php
    include "../function/fungsi.php";
    $Lapor = query("SELECT tb_buku.judul_buku, tb_anggota.nama_anggota, tb_transaksi.tgl_pinjam, tb_transaksi.tgl_kembali, tb_transaksi.status FROM tb_transaksi INNER JOIN tb_buku ON tb_transaksi.id_buku = tb_buku.id_buku INNER JOIN tb_anggota ON tb_transaksi.id_anggota = tb_anggota.id_anggota");
    
    $Judul = "Data Peminjaman";
    $tgl= "Time : ".date("l, d F Y");
    $Header= array(
        array("label"=>"Judul buku", "length"=>50, "align"=>"L"),
        array("label"=>"Nama Anggota", "length"=>50, "align"=>"L"),
        array("label"=>"Tanggal Pinjam", "length"=>20, "align"=>"L"),
        array("label"=>"Tanggal Kembali", "length"=>20, "align"=>"L"),
        array("label"=>"Status", "length"=>30, "align"=>"L"),
    );
    require ("../fpdf182/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage('P','A4','C');
    $pdf->SetFont('arial','B','15');
    $pdf->Cell(0, 15, $Judul, '0', 1, 'C');
    $pdf->SetFont('arial','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('arial','','12');
    $pdf->SetFillColor(190,190,0);
    $pdf->SetTextColor(255);
    $pdf->setDrawColor(128,0,0);
    foreach ($Header as $Kolom){
        $pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
    }
    $pdf->Ln();
    $pdf->SetFillColor(244,235,255);
    $pdf->SettextColor(0);
    $pdf->SetFont('arial','','10');
    $fill =false;
    foreach ($Lapor as $Baris){
        $i= 0;
        foreach ($Baris as $Cell){
            $pdf->Cell ($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
?>



<!-- <?php
require('../fpdf182/fpdf.php');
require("../function/konek.php");

class Index
{
	public function koneksi(){
		$conn = new mysqli("localhost", "root", "", "perus");

		if ($conn->connect_errno) {
		  echo "Koneksi Gagal, silahkan coba lihat DB: " . $conn->connect_error;
		  exit();
		}

	}
    public function GetData()
    {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(40, 10, 'Hello World!');
        $pdf->Output();
    }

    public function getDatUser()
    {
        $conn = koneksi();  // Instance Class Database
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16); // mengatur font

        $pdf->Cell(190, 7, 'Daftar', 0, 1);
        $pdf->Ln(); // Berpindah baris

        $heading = array(
            'judul_buku' => 'Judul buku',
            'nama_anggota' => 'Nama Anggota',
            'tgl_pinjam' => 'Tanggal Pinjam',
            'tgl_kembali' => 'Tanggal Kembali',
            'status' => 'Status'
        );
       $header = mysqli_query($conn,"show COLUMNS FROM tb_transaksi");
        foreach ($header as $item) {
            $pdf->Cell(45, 10, $heading[$item['Field']], 1);
        }

        $rsl  = query( "SELECT tb_buku.judul_buku, tb_anggota.nama_anggota, tb_transaksi.tgl_pinjam, tb_transaksi.tgl_kembali, tb_transaksi.status FROM tb_transaksi INNER JOIN tb_buku ON tb_transaksi.id_buku = tb_buku.id_buku INNER JOIN tb_anggota ON tb_transaksi.id_anggota = tb_anggota.id_anggota");

        foreach ($rsl as $row) {
            $pdf->Ln();
            foreach ($row as $column)
                $pdf->Cell(45, 10, $column, 1);
        }
        $pdf->Output();
    }
}

$index = new Index();

$index->getDatUser();