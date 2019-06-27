@extends('_partials/master')
@section('konten')
<!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Daftar Mahasiswa TA
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Form Pengajuan TA</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Labels on top -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Daftar Mahasiswa TA</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead class="thead-dark">
                                    <?php $no=1;?>
                                    <tr>
                                        <th class="text-center font-size-sm text-center">No</th>
                                        <th class="text-center font-size-sm text-center">Kode Dosen</th>
                                        <th class="text-center font-size-sm text-center">Nama</th>
                                        <th class="text-center font-size-sm text-center">jumlah yang dibimbing</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dosen as $row): ?>
                                        <tr>
                                            <td class="text-center font-size-sm text-center">{{$no++}}</td>
                                            <th class="text-center font-size-sm text-center">{{$row->kode_dosen}}</th>
                                            <td class="text-center font-size-sm text-center">{{$row->nama_dosen}}</td>
                                            <td class="text-center font-size-sm text-center"></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        </div>
                    </div>
                    <!-- END Labels on top -->

<!-- Modal -->                    
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center" id="myModalLabel" style="font-size: 25px">Rincian Pengajuan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Approve</button>
          </div>
    </div>
  </div>
</div>
<!-- END Modal -->

@endsection
