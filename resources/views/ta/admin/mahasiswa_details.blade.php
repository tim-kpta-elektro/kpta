<div class="row">
	<div class="col-lg-12">
		<table class="table table-borderless table-hover">
			<thead>
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
					<td>{{$row->keahlian}}</td>
				</tr>
				<tr>
					<th>Mata Kuliah Pendukung 1</th>
					<th>:</th>
					<td>{{$row->mk1}}</td>
				</tr>
				<tr>
					<th>Mata Kuliah Pendukung 2</th>
					<th>:</th>
					<td>{{$row->mk2}}</td>
				</tr>
				<tr>
					<th>Mata Kuliah Pendukung 3</th>
					<th>:</th>
					<td>{{$row->mk3}}</td>
				</tr>
				<tr>
					<th>Pembimbing 1 <a style="color: red; font-size: 10px; vertical-align: top;">*)</a></th>
					<th>:</th>
					<td>
						<select>
							<?php $arr = ['AUG001','CHI001','DRM001','FER001','HAR050','IRW001','MEI002','MUH015','MUH043','SUB012','SUT034'];?>
							@foreach($arr as $item)
							<option value="{{$item}}" @if($row->pembimbing1=== $item) selected='selected' @endif> {{strtoupper($item)}}</option>
							@endforeach
						</select>
					</td>
				</tr>
			</thead>
		</table>
		<hr>
		<p style="color: red; font-size: 15px;">*) Koordinator TA dapat mengganti pembimbing 1 dan 2</p>
	</div>
</div>