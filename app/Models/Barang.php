<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class barang extends Sximo  {
	
	protected $table = 'tx_item';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tx_item.* FROM tx_item  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tx_item.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	
	public static function getMainTable(){
		return \DB::table('tx_item')->get();
	}

}
