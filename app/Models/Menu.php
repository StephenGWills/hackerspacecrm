<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'menus';

	protected $fillable = [
		'parent_id',
		'permission',
		'menu_group',
		'menu_order',
		'title',
		'url',
		'description',
		'icon'
	];

	/**
	 * Relation between this menu and its parents.
	 *
	 * @return Menu
	 */
	public function parent()
	{
		return $this->belongsTo(self::class, 'parent_id')->orderBy('menu_order', 'asc');
	}

	/**
	 * Relation between this menu and its children.
	 *
	 * @return Menu
	 */
	public function children()
	{
		return $this->hasMany(self::class, 'parent_id')->orderBy('menu_order', 'asc');
	}
}