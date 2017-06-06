@extends('app')
@section('title', 'Input')

@section('content')
	<div id="box-content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="text-center">Input Berkas</h2>
				<br>
				<form name="input">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nama Surat</label>
								<input class="form-control" type="text" name="nama" placeholder="Nama Surat">
							</div>
							<div class="form-group">
								<label>Asal Surat</label>
								<input class="form-control" type="text" name="asal" placeholder="Asal Surat">
							</div>
							<div class="form-group">
								<label>Perihal Surat</label>
								<input class="form-control" type="text" name="perihal" placeholder="Perihal Surat">
							</div>
							<div class="form-group">
								<label>Tanggal Surat</label>
				                <div class='input-group date datepicker'>
				                    <input type='text' class="form-control" name="tgl">
				                    <span class="input-group-addon">
				                        <span class="fa fa-calendar"></span>
				                    </span>
				                </div>
							</div>
							<div class="form-group">
								<label>Tanggal Input Surat</label>
				                <div class='input-group date datepicker'>
				                    <input type='text' class="form-control" name="tgl_input">
				                    <span class="input-group-addon">
				                        <span class="fa fa-calendar"></span>
				                    </span>
				                </div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Status Surat</label>
								<input class="form-control" type="text" name="status" placeholder="Status Surat">
							</div>
							<div class="form-group">
								<label>Kirim ke</label>
								<select class="form-control" name="kirim">
									<option value="0" disabled selected>-- Select Disposisi --</option>
									<option value="1">TU</option>
									<option value="2">KA Unit</option>
									<option value="3">KTU</option>
									<option value="4">Kasat Pelayanan</option>
									<option value="5">Kasat Pendataan</option>
									<option value="6">Kasat Penagihan</option>
									<option value="7">Penerimaan Barang</option>
									<option value="8">Bendahara</option>
									<option value="9">KA Unit</option>
								</select>
							</div>
							<div class="form-group">
								<label>Uraian Hasil</label>
								<textarea class="form-control" rows="3" name="uraian" placeholder="Uraian Hasil"></textarea>
							</div>
						</div>
					</div>
					<br><br><br>
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="col-sm-6 smallpadding">
								<button class="btn btn-primary btn-block">Submit</button>
							</div>
							<div class="col-sm-6 smallpadding">
								<button class="btn btn-default btn-block">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script>
		// Date Picker
		$(".datepicker").datepicker({
			autoclose: true,
			todayHighlight: true,
		});
		$(".datepicker").datepicker("setDate", new Date());

		// Validator
		$(function() {
		  $("form[name='input']").validate({
		    rules: {
		      nama: "required",
		      asal: "required",
		      perihal: "required",
		      tgl: "required",
		      tgl_input: "required",
		      status: "required",
		      kirim: "required",
		      uraian: "required",
		    },
		    messages: {
		      nama: "*Required",
		      asal: "*Required",
		      perihal: "*Required",
		      tgl: "*Required",
		      tgl_input: "*Required",
		      status: "*Required",
		      kirim: "*Required",
		      uraian: "*Required",
		    },
		    submitHandler: function(form) {
		      form.submit();
		    }
		  });
		});
	</script>
@stop