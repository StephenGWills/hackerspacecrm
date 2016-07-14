<?php

namespace App\Models;

use App\Models\Permission;
use App\Traits\HasPermission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasPermission;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'label'];

    /**
     * Relation between a Role and the Permission.
     *
     * @return Permissions
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
