<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class harga extends Sximo  {
	
	protected $table = 'm_harga';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT m_harga.* FROM m_harga  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE m_harga.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
