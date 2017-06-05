function validasi_input(form){
	var mincar = 3;
  if (form.kode.value == ""){
    alert("Nama Surat masih kosong!");
    form.kode.focus();
    return (false);
  }
	  else if(form.kode.value.length < mincar){
	  	alert("Nama surat harus lebih dari 3 karakter");
	  	form.kode.focus();
	  	return(false);
	  }
	  else if (form.asalsurat.value == ""){
	  			alert("Asal Surat masih kosong ");
	  			form.asalsurat.focus();
	  			return(false);
	  	}
  	
    else if(form.perihal.value == ""){
		alert("Perihal surat masih kosong");
		form.perihal.focus();
		return(false);
	}
	else if(form.tglsurat.value == ""){
		alert("Tanggal surat masih kosong");
		form.tglsurat.focus();
		return(false);
	}
	else if (form.tglmasuk.value == ""){
		alert("Tanggal surat masuk masih kosong");
		form.tglmasuk.focus();
		return(false);
	}
	else if (form.status_surat.value == ""){
		alert("Status surat masuk masih kosong");
		form.status_surat.focus();
		return(false);
	}
	else if(form.kirim.value == "kirim1"){
		alert("Kirim surat harus dipilih");
		return(false);
	}
	else if(form.uraian_hasil.value == ""){
		alert("uraian hasil masih kosong");
		form.uraian_hasil.focus();
		return(false);
	}


return (true);
}

