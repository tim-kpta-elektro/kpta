<?php
// manggil library FPDF
require('fpdf.php');
// Memberi page layout ama margin
$pdf = new FPDF('P','mm','A4');
//Membuat 
function tgl_indo($tanggal){
	$bulan = array (
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
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
date_default_timezone_set("Asia/Jakarta");
class PDF extends FPDF
{
function Footer()
	{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}
// bikin halaman baru
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(20, 10 ,10);
// setting font yang dipake
$pdf->SetFont('Arial','',14);
// mencetak string atau nama yang akan ditampilkan
$pdf->Cell(210,5,'KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI',0,1,'C');
$pdf->Cell(190,7,'UNIVERSITAS SEBELAS MARET',0,1,'C');
$pdf->Cell(190,5,'FAKULTAS TEKNIK',0,1,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK ELEKTRO',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(190,5,'Jl. Ir. Sutami No.36A, Jebres, Kota Surakarta, Jawa Tengah 57126',0,1,'C');
$pdf->Cell(190,7,'tlp.(0271) 647069 web:http://elektro.ft.uns.ac.id/',0,1,'C');
// ngasih space kebawah biar ga terlalu rapat
$pdf->Cell(10,5,'',0,1);
// ngasih logo pojok kiri atas
$pdf->Image('logo_uns.png',15,14,-225);
//bikin garis header
$pdf->SetLineWidth(.75);
$pdf->Line(20, 45, 210-20, 45); 
//bikin isi form 
$pdf->SetFont('Arial','B',15);
$pdf->Cell(180,5,'FORMULIR PENDAFTARAN KERJA PRAKTEK',0,1,'C');
// ngasih space kebawah biar ga terlalu rapat
$pdf->Cell(10,1,'',0,1);

session_start();
include 'includes/dbopen.php';
include 'includes/session.php';

$pengajuan_kp = mysqli_query($con, "select * from form_pengajuan_kp where nim='$username' ORDER BY tgl_ajuan DESC LIMIT 1");//manggil dari database TA berdasarkan inputan terbaru
while ($row = mysqli_fetch_array($pengajuan_kp)){ //manggil dari database TA
//ganti baris waktu KP
	$pdf->Cell(10,5,'',0,1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(60,12,'1. DATA MAHASISWA',0,0,'L');
//ganti baris Nama Mahasiswa   
    $pdf->Cell(10,10,'',0,1);
	$pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'Nama ',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(100,5,$row['mhs_nama'],0,0,'L');//manggil dari database TA
//ganti baris NIM
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,5,'',0,1);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'NIM',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
    $pdf->Cell(100,5,$row['nim'],0,0,'');//manggil dari database TA
//ganti baris IPK
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,5,'',0,1);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'IPK (Indeks Prestasi Kumulatif)',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
    $pdf->Cell(100,5,$row['ipk'],0,0,'');//manggil dari database TA
//ganti baris SKS
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,5,'',0,1);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'Capaian SKS',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(100,5,$row['sks_lulus'],0,0,'L');//manggil dari database TA
//ganti baris waktu KP
	$pdf->Cell(10,10,'',0,1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(60,12,'2. DATA PERUSAHAAN',0,0,'L');
	//ganti baris Konsentrasinya apa
	$pdf->Cell(10,10,'',0,1);
	$pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'Nama Perusahaan/Institusi',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(100,6,$row['perusahaan_nama'],0,0,'L'); //manggil dari database TA
//ganti baris Judulnya apa
$pdf->Cell(10,10,'',0,1);
	$pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'Alamat Perusahaan/Institusi',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->MultiCell(100,6,$row['perusahaan_almt'],0,'T', false,'T');

//$pdf->Cell(10,2,'',0,1);
//$pdf->Cell(10,10,'',0,0);
//$current_y = $pdf->GetY();
//$current_x = $pdf->GetX();
//$pdf->SetFont('Arial','B',10);
//$pdf->MultiCell(60,12,'Alamat Perusahaan/Institusi',0,'T', false,'T');
//$pdf->Cell(100,12,$row['perusahaan_almt'],0,0,'L'); //manggil dari database TA
//$pdf->SetXY($current_x + 60, $current_y);
//$pdf->MultiCell(20,12,':',0,'T', false,'T');
//$pdf->SetXY($current_x + 80, $current_y);
//$pdf->MultiCell(20,12,'',0,'C', false,'T');
//$pdf->SetXY($current_x + 100, $current_y);

//ganti baris Jenis usaha
	$pdf->Cell(10,15,'',0,1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'Jenis Usaha Perusahaan',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(100,5,$row['perusahaan_jenis'],0,0,'L');//manggil dari database TA
//ganti baris PIC
	$pdf->Cell(10,5,'',0,1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'PIC',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(100,5,$row['pic'],0,0,'L'); //manggil dari database TA
	//ganti baris waktu KP
	$pdf->Cell(10,5,'',0,1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,6,'Waktu KP',0,0,'L');
	$pdf->Cell(5,6,':',0,0,'L');
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(100,6,$row['tgl_kp'].' s/d '.$row['tgl_sls_kp'],0,0,'L'); //manggil dari database TA
//ganti baris waktu KP
	$pdf->Cell(10,10,'',0,1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(60,12,'3. PERSYARATAN YANG HARUS DILAMPIRKAN',0,0,'L');
//ganti baris PIC
	$pdf->Cell(10,10,'',0,1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,5,'1. Fotocopy KRS Terakhir',0,0,'L');

	//ganti baris waktu KP
	$pdf->Cell(10,5,'',0,1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,10,'',0,0);
	$pdf->Cell(60,6,'2. Fotocopy KHS Kumulatif',0,0,'L');
	
//ganti baris Perihal TTD 
$pdf->Cell(10,30,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(103,6,'',0,0,'L'); 
$pdf->Cell(70,6,'Surakarta, ' . tgl_indo(date('Y-m-d')),0,0,'L');// manggil tanggal
$pdf->Cell(10,5,'',0,1);
$pdf->Cell(10,10,'',0,0);
$pdf->Cell(93,6,'Menyetujui',0,0,'l');
$pdf->Cell(70,6,'Yang Mengajukan,',0,1,'L');
$pdf->Cell(10,10,'',0,0);
$pdf->Cell(85,6,'Koordinator Kerja Praktek',0,0,'l');
$pdf->Cell(10,20,'',0,1);

//Nama Mahasiswa
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,10,'',0,0);
$pdf->Cell(93,6,'nama',0,0,'L');
$pdf->Cell(50,6,$row['mhs_nama'],0,0,'l');//manggil dari database TA
$pdf->Cell(10,5,'',0,1);
$pdf->Cell(10,10,'',0,0);
$pdf->Cell(93,6,'nip',0,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,$row['nim'],0,0,'l');//manggil dari database TA
}
//mencetak pdf
$pdf->Output();
?>