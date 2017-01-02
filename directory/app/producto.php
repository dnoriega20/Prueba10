<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model {


protected $table = 'producto';
protected $fillable = array('id','nombre', 'valor','usuario_id');

public $timestamps = false ;

public function usuario() {
		return $this->hasMany('\App\producto','usuario_id'); // this matches the Eloquent model
	}
    /*	
public function comments(){
	//
	return producto::where('id',$this->usuario_id);
	*/
}

/*protected $table ="producto";

	protected $fillable = ['valor','nombre'];

public $timestamps = false ;*/