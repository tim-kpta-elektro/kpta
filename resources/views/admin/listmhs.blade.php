@extends('_partials/master')
@section('konten')
<!-- Dynamic Table with Export Buttons -->
<div class="block">
    <div class="block-header">
        <h3 class="block-title">List <small>Mahasiswa</small></h3>
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" style="width: 20px">No</th>
                    <th class="text-center" style="width: 150px;">NIM</th>
                    <th class="d-none d-sm-table-cell text-center">Nama</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 40%;">Pembimbing Akademik</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php $no=1; ?>
            	<?php foreach ($data as $row): ?>
                  <tr>
                  	<td class="text-center font-size-sm text-center">{{$no++}}</td>
                    <td class="text-center font-size-sm text-center">{{$row->nim}}</td>
                    <td class="font-w600 font-size-sm text-center">
                        <a href="#">{{$row->nama_mhs}}</a>
                    </td>
                    <td class="d-none d-sm-table-cell font-size-sm text-center">
                        {{$row->nama_dosen}}
                    </td>
                    <td width="250" style="text-align: center;">
                      <a href="{{url('/admin/pembimbing/'.$row->nim)}}" class="btn btn-sm btn-warning">Update</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table with Export Buttons -->
@endsection