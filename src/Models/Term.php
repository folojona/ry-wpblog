<?php
namespace Ry\Wpblog\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
	protected $table = "terms";

	public function __construct(array $attributes = []) {
		$this->table = env("wp_prefix") . $this->table;
		 
		parent::__construct($attributes);
	}
}