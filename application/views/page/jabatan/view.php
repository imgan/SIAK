<div class="row">
	<div class="col-xs-1">
		<button id="item-tambah" role="button" data-toggle="modal" class="btn btn-xs btn-info">
			<a class="ace-icon fa fa-plus bigger-120"></a>Tambah Data
		</button>
	</div>
	<br>
	<br>
</div>
<div id="modalTambah" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Form Input Edit Data <?= $page_name; ?></h3>
			</div>
			<form class="form-horizontal" role="form" id="formTambah">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Jabatan </label>
									<div class="col-sm-6">
										<input type="text" id="id" name="id" id="form-field-1" placeholder="Kode Jabatan" class="form-control" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Jabatan </label>
									<div class="col-sm-9">
										<input type="text" id="nama" name="nama" placeholder="Nama Jabatan" class="form-control" />
									</div>
								</div>
								
							      <!-- <div class="form-group">
							        <label for="formGroupExampleInput">Name</label>
							        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
							      </div>
							 
							      <div class="form-group">
							        <label for="email">Email Id</label>
							        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
							      </div>   
							 
							      <div class="form-group">
							        <label for="mobile_number">Mobile Number</label>
							        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Please enter mobile number" maxlength="10">
							      </div> -->
							 
							      <!-- <div class="form-group">
							       <button type="submit" id="send_form" class="btn btn-success">Submit</button>
							      </div>
							    
							 -->
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="btn_simpan" class="btn btn-sm btn-success pull-left">
						<i class="ace-icon fa fa-save"></i>
						Simpan
					</button>
					<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
						<i class="ace-icon fa fa-times"></i>
						Batal
					</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<div id="modalEdit" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Form Edit Data <?= $page_name; ?></h3>
			</div>
			<form class="form-horizontal" role="form" id="formEdit">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Jabatan </label>
									<div class="col-sm-6">
										<input type="text" id="e_id" name="e_id" id="form-field-1" placeholder="Kode Jabatan" class="form-control" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Jabatan </label>
									<div class="col-sm-9">
										<input type="text" id="e_nama" name="e_nama" placeholder="Nama Jabatan" class="form-control" />
									</div>
								</div>
								
							      <!-- <div class="form-group">
							        <label for="formGroupExampleInput">Name</label>
							        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
							      </div>
							 
							      <div class="form-group">
							        <label for="email">Email Id</label>
							        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
							      </div>   
							 
							      <div class="form-group">
							        <label for="mobile_number">Mobile Number</label>
							        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Please enter mobile number" maxlength="10">
							      </div> -->
							 
							      <!-- <div class="form-group">
							       <button type="submit" id="send_form" class="btn btn-success">Submit</button>
							      </div>
							    
							 -->
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="btn_edit" class="btn btn-sm btn-success pull-left">
						<i class="ace-icon fa fa-save"></i>
						Ubah
					</button>
					<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
						<i class="ace-icon fa fa-times"></i>
						Batal
					</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			Semua Data <?= $page_name; ?>
		</div>
	</div>
</div>
<br>
<table id="table_id" class="display">
	<thead>
		<tr>
			<th class="col-md-1">No</th>
			<th>Kode Jabatan</th>
			<th>Nama Jabatan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody id="show_data">
	</tbody>
</table>
<script>
	if ($("#formTambah").length > 0) {
	    $("#formTambah").validate({
		   errorClass: "my-error-class",
		   validClass: "my-valid-class",
		    rules: {
		      id: {
		        required: true
		        // ,maxlength: 50
		      },
		  
		   nama: {
		        required: true
		        // , digits:true,
		        // minlength: 10,
		        // maxlength:12,
		    },
		    // email: {
		    //         required: true,
		    //         maxlength: 50,
		    //         email: true,
		    //     },    
		    },
		    messages: {
		        
		      id: {
		        required: "Kode jabatan harus diisi!"
		        // ,maxlength: "Your last name maxlength should be 50 characters long."
		      },
		      nama: {
		        required: "Nama jabatan harus diisi!"
		        // ,minlength: "The contact number should be 10 digits",
		        // digits: "Please enter only numbers",
		        // maxlength: "The contact number should be 12 digits",
		      },
		      // email: {
		      //     required: "Please enter valid email",
		      //     email: "Please enter valid email",
		      //     maxlength: "The email name should less than or equal to 50 characters",
		      //   },
		         
		    },
		    submitHandler: function(form) {
		      $('#btn_simpan').html('Sending..');
		      $.ajax({
		        url: "<?php echo base_url('jabatan/simpan_jabatan') ?>",
		        type: "POST",
		        data: $('#formTambah').serialize(),
		        dataType: "json",
		        success: function( response ) {
		            $('#btn_simpan').html('<i class="ace-icon fa fa-save"></i>'+
						'Simpan');
		            if(response == true){
		            	document.getElementById("formTambah").reset(); 
						swalInputSuccess();
						show_data();
						$('#modalTambah').modal('hide');
					}else if(response == 401){
						swalIdDouble('Kode Jabatan Sudah digunakan!');
					}else{
						swalInputFailed();
					}
		            // setTimeout(function(){
		            // // $('#res_message').hide();
		            // // $('#msg_div').hide();
		            // },3000);
		        }
		      });
		    }
		})
	}

if ($("#formEdit").length > 0) {
    $("#formEdit").validate({
	   errorClass: "my-error-class",
	   validClass: "my-valid-class",
	    rules: {
			e_id: {
				required: true
			},
			e_nama: {
			    required: true
			}, 
	    },
	    messages: {
	        
			e_id: {
				required: "Kode jabatan harus diisi!"
			},
			e_nama: {
				required: "Nama jabatan harus diisi!"
			},
	         
	    },
	    submitHandler: function(form) {
	      $('#btn_edit').html('Sending..');
	      $.ajax({
	        url: "<?php echo base_url('jabatan/update_jabatan') ?>",
	        type: "POST",
	        data: $('#formEdit').serialize(),
	        dataType: "json",
	        success: function( response ) {
	            $('#btn_edit').html('<i class="ace-icon fa fa-save"></i>'+
					'Ubah');
	            if(response == true){
	            	document.getElementById("formEdit").reset(); 
					swalEditSuccess();
					show_data();
					$('#modalEdit').modal('hide');
				}else if(response == 401){
					swalIdDouble('Kode Jabatan Sudah digunakan!');
				}else{
					swalEditFailed();
				}
	        }
	      });
	    }
	  })
	}
</script>
<script type="text/javascript">
	$(document).ready(function() {
		show_data();
		$('#table_id').DataTable();
	});

	//function show all Data
	function show_data() {
		$.ajax({
			type: 'ajax',
			url: '<?php echo site_url('jabatan/tampil_jabatan') ?>',
			async: true,
			dataType: 'json',
			success: function(data) {
				var html = '';
				var i = 0;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					html += '<tr>' +
						'<td class="text-center">' + no + '</td>' +
						'<td class="text-center">' + data[i].id + '</td>' +
						'<td>' + data[i].nama + '</td>' +
						'<td class="text-center">' +
						'<button  href="#my-modal-edit" class="btn btn-xs btn-info item_edit" title="Edit" data-id="' + data[i].id + '">'+
							'<i class="ace-icon fa fa-pencil bigger-120"></i>'+
						'</button> &nbsp'+
						'<button class="btn btn-xs btn-danger item_hapus" title="Delete" data-id="' + data[i].id + '">'+
							'<i class="ace-icon fa fa-trash-o bigger-120"></i>'+
						'</button>'+
						'</td>' +
						'</tr>';
					no++;
				}
				$("#table_id").dataTable().fnDestroy();
				var a = $('#show_data').html(html);
				//                    $('#mydata').dataTable();
				if (a) {
					$('#table_id').dataTable({
						"bPaginate": true,
						"bLengthChange": false,
						"bFilter": true,
						"bInfo": false,
						"bAutoWidth": false
					});
				}
				/* END TABLETOOLS */
			}

		});
	}

	//show modal tambah
	$('#item-tambah').on('click', function() {
		$('#modalTambah').modal('show');
	});

	//get data for update record
	$('#show_data').on('click', '.item_edit', function() {
		document.getElementById("formEdit").reset();
		var id = $(this).data('id');
		$('#modalEdit').modal('show');
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('jabatan/tampil_byid') ?>",
			async: true,
			dataType: "JSON",
			data: {
				id: id,
			},
			success: function(data) {
				$('#e_id').val(data[0].id);
				$('#e_nama').val(data[0].nama);
			}
		});
	});

    $('#show_data').on('click','.item_hapus',function(){
        var id    = $(this).data('id');
       Swal.fire({
		  title: 'Apakah anda yakin?',
		  text: "Anda tidak akan dapat mengembalikan ini!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Ya, Hapus!',
		  cancelButtonText: 'Batal'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				type: "POST",
				url: "<?php echo base_url('jabatan/delete_jabatan') ?>",
				async: true,
				dataType: "JSON",
				data: {
					id: id,
				},
				success: function(data) {
					show_data();
					Swal.fire(
				      'Terhapus!',
				      'Data sudah dihapus.',
				      'success'
				    )
				}
			});
		  }
		})
    })


	//Simpan guru
	// $('#btn_simpan1').on('click', function() {
	// 	var id = $('#id').val();
	// 	var nama = $('#nama').val();
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "<?php echo base_url('jabatan/simpan_jabatan') ?>",
	// 		dataType: "JSON",
	// 		data: {
	// 			id: id,
	// 			nama: nama,
	// 		},
	// 		success: function(response) {
	// 			if(response == true){
	// 				swalInputSuccess();
	// 				show_data();
	// 				$('[name="id"]').val("");
	// 				$('[name="nama"]').val("");
	// 				$('#modalTambah').modal('hide');
	// 			}else if(response == 1048){
	// 				swalIdDouble('ID Jabatan Sudah digunakan!');
	// 			}else{
	// 				swalInputFailed();
	// 			}
	// 		}
	// 	});
	// 	return false;
	// });
</script>