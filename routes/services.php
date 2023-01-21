<?php
        
// Start Routes for barang 
Route::resource('services/barang','Services\BarangController');
// End Routes for barang 

                    
// Start Routes for harga 
Route::resource('services/harga','Services\HargaController');
// End Routes for harga 

                    
// Start Routes for satuan 
Route::resource('services/satuan','Services\SatuanController');
// End Routes for satuan 

                    
// Start Routes for jenis 
Route::resource('services/jenis','Services\JenisController');
// End Routes for jenis 

                    
// Start Routes for merek 
Route::resource('services/merek','Services\MerekController');
// End Routes for merek 

                    
// Start Routes for rak 
Route::resource('services/rak','Services\RakController');
// End Routes for rak 

                    ?>