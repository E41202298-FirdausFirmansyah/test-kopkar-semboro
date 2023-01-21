<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class satuan extends Sximo  {
	
	protected $table = 'm_satuan';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT m_satuan.* FROM m_satuan  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE m_satuan.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
