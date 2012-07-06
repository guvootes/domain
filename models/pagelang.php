<?php namespace Domain\Models;

use Domain\Libraries\Model as Eloquent;

class PageLang extends Eloquent {

	public static $table = 'page_lang';

	public function language()
	{
		return $this->has_one('Domain\\Models\\Language', 'id', 'language_id');
	}

	public function versions()
	{
		return $this->has_many('Domain\\Models\\PageLang', 'id')
			->order_by('version', 'DESC');
	}

}