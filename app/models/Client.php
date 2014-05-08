<?php

class Client extends \Eloquent {
	protected $fillable = ['name', 'slug'];

	protected function setNameAttribute( $value )
	{
		$this->attributes['slug'] = Str::slug($value);
		$this->attributes['name'] = $value;
	}

	public function images()
	{
		return $this->hasMany('Image', 'client_id', 'id');
	}
}