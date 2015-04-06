<?php

class Multa extends BaseModel
{
	protected $table = 'multa';

	protected $fillable = array('infracao','ponto','penalidade','valor');

	public static $rules = array(
		'infracao' => 'required|min:3|max:45|unique:multa,infracao'
                ,'ponto' => 'required|integer|min:0|max:999'
                ,'penalidade' => 'required|min:1|max:45'
                ,'valor' => 'required|min:1|max:10'
	);

	public static function validate($data)
	{
		if(Request::getMethod() == 'PUT'){
			$id = $data['id'];
			self::$rules['infracao'] .= ",$id";
		}

		return Validator::make($data, self::$rules);
	}

	public static function options()
	{
		return static::orderBy('infracao')->lists('infracao', 'id');
	}
}