<div class="row">
	<div class="col-lg-12">
		<table class="table table-borderless table-hover">
			<thead>
				<tr>
					<th style="width: 20%">Nama</th>
					<th style="width: 5%">:</th>
					<td>{{$row->nama_mhs}}</td>
				</tr>
				<tr>
					<th style="width: 20%">NIM</th>
					<th style="width: 5%">:</th>
					<td>{{$row->nim_mhs}}</td>
				</tr>
				<tr>
					<th>Judul</th>
					<th>:</th>
					<td>{{$row->judul}}</td>
				</tr>
				<tr>
					<th>Keahlian</th>
					<th>:</th>
					<td>{{$peminatan_ta->nama_peminatan}}</td>
				</tr>
				<tr>
					<th>Pembimbing 1</th>
					<th>:</th>
					<td>{{$pembimbing1_ta->nama_dosen}}</td>
				</tr>
				<tr>
					<th>Pembimbing 2</th>
					<th>:</th>
					<td>{{$pembimbing2_ta->nama_dosen}}</td>
				</tr>
			</thead>
		</table>
		<table class="table table-bordered table-striped table-vcenter ">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center" style="width: 80px;">Kode</th>
                        <th class="d-none d-sm-table-cell text-center">Nama Mata Kuliah</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Nilai</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Huruf</th>
                    </tr>
                </thead>
			<tbody>
				<?php foreach ($matkul_ta as $matkuls):?>
				<tr>
					<td class="text-center" style="width: 80px;">{{$matkuls->kode_matkul}}</td>
					<td class="text-center" style="width: 80px;">{{$matkuls->nama_matkul}}</td>
					<td class="text-center" style="width: 80px;">{{$matkuls->ip}}</td>
					<td class="text-center" style="width: 80px;">{{$matkuls->huruf}}</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>		
		<hr>
	</div>
</div>