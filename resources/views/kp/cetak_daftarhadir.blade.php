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
          text-align: center;
      }

      table.table1 * {
          border: none;
      }

      .table1 td {
          font-size: 14px;
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
        padding: 8px;
      }
      .table2 td {
          height: 25px;
      }

      .table2 tr:nth-child(even){background-color: #f2f2f2}

      .table2 th {
        background-color: #3c73a3;
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
        height: 1cm;

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
                TE-KP-010
            </span>
        </footer>
            <p style="text-align: center; font-size: 18px;"><strong>DAFTAR HADIR SEMINAR KERJA PRAKTEK</strong></p>
            <table class="table1" style="width: 100%">    
                <tr>
                    <td style="width: 25%;">Nama</td>
                    <td style="width: 3%;">:</td>
                    <td style="width: 72%;"><strong>{{$test1->nama_mhs}}</strong></td>
                </tr>
                <tr>
                    <td>Judul Laporan KP</td>
                    <td>:</td>
                    <td><strong>{{$test1->judul_seminar}}</strong></td>
                </tr>
                <tr>
                    <td>Tanggal KP</td>
                    <td>:</td>
                    <td><strong>{{$test1->tgl_mulai_kp}} s/d {{$test1->tgl_selesai_kp}}</strong></td>
                </tr>
                <tr>
                    <td>Tempat KP</td>
                    <td>:</td>
                    <td><strong>{{$test1->perusahaan_nama}}</strong></td>
                </tr>
                <tr>
                    <td>Pembimbing</td>
                    <td>:</td>
                    <td><strong>{{$test1->nama_dosen}}</strong></td>
                </tr>
            </table>
            <br>
            <table class="table2">
              <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 20%;">Nama</th>
                <th style="width: 65%;">NIP/NIM</th>
                <th style="width: 10%;">Tanda Tangan</th>
              </tr>
              <tr>
                  <td>1</td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>2</td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
            </table>     
         </div>     
      </div>
  </div>
    <div class="page-break"></div>
    <div class="container">
        <div class="row">
           <div class="col">
        <footer>
            <span style="background-color: #000000; color: white;">
                TE-KP-010
            </span>
        </footer>
               <table class="table2">
                  <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 20%;" >Nama</th>
                    <th style="width: 65%;" >NIP/NIM</th>
                    <th style="width: 10%;">Tanda Tangan</th>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                </table>      
           </div>     
        </div>
    </div>
</body>
</html>