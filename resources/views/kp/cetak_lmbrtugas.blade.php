<!DOCTYPE html>
<html>
<head>
  <title>Lembar Tugas KP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
      table.table * {
          border: none;
      }

      .table td {
          height: 25px;
      }

      table.table1 * {
          border: none;
      }

      .table1 td {
          vertical-align: text-top;
          text-align: left;
          padding: 2px;
      }

      table.table2 {
        border-collapse: collapse;
        width: 100%;
      }

      .table2 table.table2, th, td {
        border: 1px solid black;
      }

      .table2 th, td {
        text-align: center;
        /*padding: 8px;*/
      }
      .table2 td {
          height: 25px;
      }

      .table2 tr:nth-child(even){background-color: #f2f2f2}

      .table2 th {
        background-color: white;
        color: white;
      }

      table.table3 * {
          border: none;
      }

      .table3 td {
          text-align: left;
      }

      .page-break {
          page-break-after: always;
      }

      body{
        font-size: 14px;
        line-height: 1.2;
      }

      footer {
        position: fixed; 
        bottom: 0cm; 
        left: 2.5cm; 
        right: 0cm;
        height: 1.5cm;

        /** Extra personal styles **/
        /*background-color: #03a9f4;*/
        text-align: justify;
        font-size: 9pt;
        line-height: 1;
        color: black;
        text-align: left;
      }

  </style>
</head>
<body>
<div class="container">
    <div class="row">
       <div class="col">
        <header>
        <table width="100%" class="table">
            <tr>
                <td style="width: 20%; text-align: center;">
                    <img src="http://localhost/kpta/assets/media/logo-uns.png" style="height: 130px;"/>
                </td>
                <td style="width: 80%;" align="center">
                    KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI<br />
                    UNIVERSITAS SEBELAS MARET<br />
                    FAKULTAS TEKNIK<br />
                    <h5><strong>PROGRAM STUDI TEKNIK ELEKTRO<strong></h5>
                    Jl. Ir. Sutami 36 A Kentingan Surakarta
                    <br /> tlp. 0271 647069 web: http://elektro.ft.uns.ac.id
                </td>
            </tr>               
        </table>
        <hr style="border: 1px solid black;">
        </header>
        <footer>
            <span style="background-color: #000000; color: white;">
                TE-KP-005
            </span>
        </footer>
              <p style="text-align: center; font-size: 18px;"><strong>LEMBAR TUGAS KERJA PRAKTEK</strong></p>
              <table class="table1" style="width: 100%">    
                  <tr>
                      <td style="width: 40%;">Nama Mahasiswa</td>
                      <td style="width: 3%;">:</td>
                      <td style="width: 57%;"><strong>{{$data->nama_mhs}}</strong></td>
                  </tr>
                  <tr>
                      <td>NIM</td>
                      <td>:</td>
                      <td><strong>{{$data->nim}}</strong></td>
                  </tr>
                  <tr>
                      <td>Dosen Pembimbing</td>
                      <td>:</td>
                      <td><strong>{{$data->nama_dosen}}</strong></td>
                  </tr>
                  <tr>
                      <td>NIP</td>
                      <td>:</td>
                      <td><strong>{{$data->nip}}</strong></td>
                  </tr>
                  <tr>
                      <td>Tempat Kerja Praktek (KP)</td>
                      <td>:</td>
                      <td><strong>{{$data->perusahaan_nama}}</strong></td>
                  </tr>
                  <tr>
                      <td>Alamat Tempat KP</td>
                      <td>:</td>
                      <td><strong>{{$data->perusahaan_almt}}</strong></td>
                  </tr>
                  <tr>
                      <td>Tanggal Kerja Praktek (KP)</td>
                      <td>:</td>
                      <td><strong>{{$data->tgl_mulai_kp}} sd. {{$data->tgl_selesai_kp}} </strong></td>
                  </tr>
              </table>
              <br>
              <p><strong>Deskripsi Tugas Mahasiswa</strong></p>
              <table class="table2">
                <tr>
                  <th style="width: 100%;"><br><br><br><br><br><br><br><br><br><br><br><br><br></th>
                </tr>
              </table>
              <br>
              <table style="width: 100%" class="table3">
                <tr>
                    <td style="width: 50%;"></td>
                    <td style="width: 50%;">Surakarta, _______________<br>Dosen Pembimbing Kerja Praktek<br><br><br><br><br>
                    <b>{{$data->nama_dosen}}</b><br>NIP. <b>{{$data->nip}}</b></td>
                </tr>
              </table>      
         </div>     
      </div>
  </div>
</body>
</html>