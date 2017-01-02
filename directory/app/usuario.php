<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */	protected $table = 'usuario';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','nombre', 'apellido', 'correo', 'direccion'];
	protected $guarded=['id'];

public $timestamps = false ;
public function producto() {
		return $this->belongsTo('producto');
	}

}
