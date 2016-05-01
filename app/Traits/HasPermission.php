<?php

namespace App\Traits;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Collection;

trait HasPermission
{
    /**
     * Get all Role Permissions.
     *
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions->lists('name', 'id')->toArray();
    }

    /**
     * Check if user has a specific role.
     *
     * @param Role name
     *
     * @return bool
     */
    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            return $this->permissions->contains('name', $permission);
        }

        if ($permission instanceof Collection) {
            return !! $permission->intersect($this->permissions)->count();
        }

        foreach ($permission as $p) {
            return $this->hasPermission($p);
        }

        return false;
    }

    /**
     * Give permission to role.
     *
     * @param App\Models\Permission $permission
     *
     * @return bool
     */
    public function givePermission(Permission $permission)
    {
        if (!$this->hasPermission($permission->name)) {
            return $this->permissions()->attach($permission);
        }
    }

    /**
     * Give Permission to Role.
     *
     * @param string $name
     *
     * @return bool
     */
    public function givePermissionByName($name)
    {
        if (!$this->hasPemrission($name)) {
            return $this->pemrissions()->attach(
                Permission::whereName($name)->firstOrFail()
            );
        }
    }

    /**
     * Give Permissions by name.
     *
     * @param array $names
     *
     * @return bool
     */
    public function givePermissionsByName($name)
    {
        foreach ($names as $name) {
            $this->givePermissionByName($name);
        }
    }

    /**
     * Revoke Permission to Role.
     *
     * @param App\Models\Permission $permission
     *
     * @return bool
     */
    public function revokePermission(Permission $permission)
    {
        if ($this->hasPermission($permission->name)) {
            return $this->permissions()->detach($permission);
        }
    }

    /**
     * Revoke Permission to Role.
     *
     * @param string $name
     *
     * @return bool
     */
    public function revokePermissionByName($name)
    {
        if ($this->hasPermission($name)) {
            return $this->permissions()->detach(
                Permission::whereName($name)->firstOrFail()
            );
        }
    }

    /**
     * Revoke Permissions by name.
     *
     * @param array $name
     *
     * @return bool
     */
    public function revokePermissionsByName($name)
    {
        foreach ($names as $name) {
            $this->revokePermissionByName($name);
        }
    }

    /**
     * Revoke All Permission from Role.
     *
     * @return bool
     */
    public function revokeAllPermissions()
    {
        return $this->permissions()->detach();
    }
}