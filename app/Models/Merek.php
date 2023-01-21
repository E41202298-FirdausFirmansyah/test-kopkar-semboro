<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class merek extends Sximo  {
	
	protected $table = 'm_merek';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT m_merek.* FROM m_merek  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE m_merek.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
