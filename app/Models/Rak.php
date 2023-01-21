<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class rak extends Sximo  {
	
	protected $table = 'm_rak';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT m_rak.* FROM m_rak  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE m_rak.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
