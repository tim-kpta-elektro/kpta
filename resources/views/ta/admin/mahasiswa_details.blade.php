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
					<th>Mata Kuliah Pendukung 1</th>
					<th>:</th>
					<td></td>
				</tr>
				<tr>
					<th>Mata Kuliah Pendukung 2</th>
					<th>:</th>
					<td></td>
				</tr>
				<tr>
					<th>Mata Kuliah Pendukung 3</th>
					<th>:</th>
					<td></td>
				</tr>
				<tr>
					<th>Pembimbing 1 <a style="color: red; font-size: 10px; vertical-align: top;">*)</a></th>
					<th>:</th>
					<td>
						<select>
							<?php foreach ($dosen as $dosens):?>
							<option value="{{$dosens->kode_dosen}}" @if($pembimbing1_ta->nama_dosen=== $dosens->nama_dosen) selected='selected' @endif> {{strtoupper($dosens->nama_dosen)}}</option>
						<?php endforeach;?>
						</select>
					</td>
				</tr>
			</thead>
		</table>
		<hr>
		<p style="color: red; font-size: 15px;">*) Koordinator TA dapat mengganti pembimbing 1 dan 2</p>
	</div>
</div>