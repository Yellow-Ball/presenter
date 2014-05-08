<?php

class Image extends \Eloquent {
	protected $fillable = ['client_id', 'active', 'filepath'];

	protected function scopeActive( $query )
	{
		return $query->where('active', '=', '1');
	}
}