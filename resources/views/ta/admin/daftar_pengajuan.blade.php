@extends('_partials/master')
@section('konten')
<!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Daftar Pengajuan TA
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="{{url('ta/admin/daftar_pengajuan')}}">Daftar Pengajuan TA</a>
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
                            <h3 class="block-title">Daftar Pengajuan</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center font-size-sm text-center">nama</th>
                                        <th class="text-center font-size-sm text-center">nim</th>
                                        <th class="text-center font-size-sm text-center">judul</th>
                                        <th class="text-center font-size-sm text-center">angkatan</th>
                                        <th class="text-center font-size-sm text-center">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mahasiswa_ta as $row): ?>
                                        <tr>
                                            <td class="text-center font-size-sm text-center">{{$row->nama_mhs}}</td>
                                            <td class="text-center font-size-sm text-center">{{$row->nim_mhs}}</td>
                                            <td class="text-center font-size-sm text-center">{{$row->judul}}</td>
                                            <td class="text-center font-size-sm text-center">{{$row->angkatan}}</td>
                                            <td class="text-center font-size-sm text-center">
                                                <button class="btn-sssm btn-info" data-toggle="modal" data-target="#view">View</button></td>
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
                @include('ta/admin.pengajuan_details')
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Approve</button>
          </div>
    </div>
  </div>
</div>
<!-- END Modal -->


@endsection
