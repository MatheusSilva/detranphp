<?php

class BaseModel extends Eloquent
{
	public $timestamps = false;

	public static function validate($data)
	{
		return Validator::make($data, static::$rules);
	}
}