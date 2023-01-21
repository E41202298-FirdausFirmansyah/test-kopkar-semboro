@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'barang?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6 " >
				 <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-danger  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>
			</div>
			<div class="col-md-6  text-right " >
				<div class="btn-group">
					
						<button name="apply" class="tips btn btn-sm btn-info  "  title="{{ __('core.btn_back') }}" > {{ __('core.sb_apply') }} </button>
						<button name="save" class="tips btn btn-sm btn-primary "  id="saved-button" title="{{ __('core.btn_back') }}" > {{ __('core.sb_save') }} </button> 
						
					
				</div>		
			</div>
			
		</div>
	</div>	


	
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
	<div class="">
		<div class="col-md-12">
						<fieldset><legend> Barang</legend>
									
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
										<label for="Harga" class=" control-label col-md-4 "> Harga </label>
										<div class="col-md-8">
										  <select name='id_m_harga' rows='5' id='id_m_harga' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Satuan" class=" control-label col-md-4 "> Satuan </label>
										<div class="col-md-8">
										  <select name='id_m_satuan' rows='5' id='id_m_satuan' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jenis" class=" control-label col-md-4 "> Jenis </label>
										<div class="col-md-8">
										  <select name='id_m_jenis' rows='5' id='id_m_jenis' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Merek" class=" control-label col-md-4 "> Merek </label>
										<div class="col-md-8">
										  <select name='id_m_merek' rows='5' id='id_m_merek' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Rak" class=" control-label col-md-4 "> Rak </label>
										<div class="col-md-8">
										  <select name='id_m_rak' rows='5' id='id_m_rak' class='select2 '   ></select> 
										 </div> 
										 
									  </div> </fieldset></div>

	</div>
	
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#id_m_harga").jCombo("{!! url('barang/comboselect?filter=m_harga:id:nominal') !!}",
		{  selected_value : '{{ $row["id_m_harga"] }}' });
		
		$("#id_m_satuan").jCombo("{!! url('barang/comboselect?filter=m_satuan:id:satuan') !!}",
		{  selected_value : '{{ $row["id_m_satuan"] }}' });
		
		$("#id_m_jenis").jCombo("{!! url('barang/comboselect?filter=m_jenis:id:jenis') !!}",
		{  selected_value : '{{ $row["id_m_jenis"] }}' });
		
		$("#id_m_merek").jCombo("{!! url('barang/comboselect?filter=m_merek:id:nama_merek') !!}",
		{  selected_value : '{{ $row["id_m_merek"] }}' });
		
		$("#id_m_rak").jCombo("{!! url('barang/comboselect?filter=m_rak:id:nama_rak') !!}",
		{  selected_value : '{{ $row["id_m_rak"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("barang/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop