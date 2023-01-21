

		 {!! Form::open(array('url'=>'barang', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Barang</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Kode Item" class=" control-label col-md-4 "> Kode Item </label>
										<div class="col-md-8">
										  <input  type='text' name='kode_item' id='kode_item' value='{{ $row['kode_item'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nama Item" class=" control-label col-md-4 "> Nama Item </label>
										<div class="col-md-8">
										  <input  type='text' name='nama_item' id='nama_item' value='{{ $row['nama_item'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Id M Harga" class=" control-label col-md-4 "> Id M Harga </label>
										<div class="col-md-8">
										  <select name='id_m_harga' rows='5' id='id_m_harga' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Id M Satuan" class=" control-label col-md-4 "> Id M Satuan </label>
										<div class="col-md-8">
										  <select name='id_m_satuan' rows='5' id='id_m_satuan' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Id M Jenis" class=" control-label col-md-4 "> Id M Jenis </label>
										<div class="col-md-8">
										  <select name='id_m_jenis' rows='5' id='id_m_jenis' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Id M Merek" class=" control-label col-md-4 "> Id M Merek </label>
										<div class="col-md-8">
										  <select name='id_m_merek' rows='5' id='id_m_merek' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Id M Rak" class=" control-label col-md-4 "> Id M Rak </label>
										<div class="col-md-8">
										  <select name='id_m_rak' rows='5' id='id_m_rak' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Created At" class=" control-label col-md-4 "> Created At </label>
										<div class="col-md-8">
										  
					{!! Form::text('created_at', $row['created_at'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Updated At" class=" control-label col-md-4 "> Updated At </label>
										<div class="col-md-8">
										  
					{!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#id_m_harga").jCombo("{!! url('barang/comboselect?filter=m_harga:id:id') !!}",
		{  selected_value : '{{ $row["id_m_harga"] }}' });
		
		$("#id_m_satuan").jCombo("{!! url('barang/comboselect?filter=m_satuan:id:id') !!}",
		{  selected_value : '{{ $row["id_m_satuan"] }}' });
		
		$("#id_m_jenis").jCombo("{!! url('barang/comboselect?filter=m_jenis:id:id') !!}",
		{  selected_value : '{{ $row["id_m_jenis"] }}' });
		
		$("#id_m_merek").jCombo("{!! url('barang/comboselect?filter=m_merek:id:id') !!}",
		{  selected_value : '{{ $row["id_m_merek"] }}' });
		
		$("#id_m_rak").jCombo("{!! url('barang/comboselect?filter=m_rak:id:id') !!}",
		{  selected_value : '{{ $row["id_m_rak"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
