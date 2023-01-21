<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class jenis extends Sximo  {
	
	protected $table = 'm_jenis';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT m_jenis.* FROM m_jenis  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE m_jenis.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
