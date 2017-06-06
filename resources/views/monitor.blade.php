@extends('app')
@section('title', 'Monitor')

@section('content')
	<div id="box-content">
		<div class="row">
			<div class="col-md-12 overflow">
				<table class="table table-striped table-bordered ">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode</th>
							<th>Asal Surat</th>
							<th>Perihal</th>
							<th>Tanggal Input</th>
							<th>TU</th>
							<th>KA Unit</th>
							<th>KTU</th>
							<th>Pelayanan</th>
							<th>Pendataan</th>
							<th>Penagihan</th>
							<th>Barang</th>
							<th>Bendahara</th>
							<th>KA Unit</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>asdzxczxc</td>
							<td>saasdzxczxcdw</td>
							<td>weasdzxczxcasdzxczxca</td>
							<td>aasdzxczxcsd</td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="TU" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="KA Unit" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="KTU" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="Kasat Pelayanan" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="Kasat Pendataan" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="Kasat Penagihan" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="Penerimaan Barang" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="Bendahara" data-user=""><input type="checkbox" name="" disabled></td>
							<td class="opt" data-toggle="modal" data-target="#detail" data-title="KA Unit" data-user=""><input type="checkbox" name="" disabled></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div id="detail" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title"></h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row" style="margin-bottom: 10px;">
	      	  <div class="col-sm-3">Nama</div>
	      	  <div class="col-sm-1">:</div>
	      	  <div class="col-sm-8"><b></b></div>
	      	</div>
	      	<div class="row" style="margin-bottom: 10px;">
	      	  <div class="col-sm-3">Tanggal</div>
	      	  <div class="col-sm-1">:</div>
	      	  <div class="col-sm-8"><b></b></div>
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Dynamic Modal -->
	<script>
		$(".opt").click(function(){
			var title = $(this).data("title");
			var user = $(this).data("user");
			$(".modal-title").html(title);
		});
	</script>

	<!-- DataTable -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script>
	    $("table").dataTable();
    </script>
@stop