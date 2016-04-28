<?php

namespace App\Traits;

use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

trait HasRole
{
    /**
     * Get all User Roles.
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles->lists('name', 'id')->toArray();
    }

    /**
     * Check if user has a specific role.
     *
     * @param Role name
     *
     * @return bool
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        if ($role instanceof Collection) {
            return !! $role->intersect($this->roles)->count();
        }

        foreach ($role as $r) {
            return $this->hasRole($r);
        }

        return false;
    }

    /**
     * Assign role to a user.
     *
     * @param App\Models\Role $role
     *
     * @return bool
     */
    public function assignRole(Role $role)
    {
        if (!$this->hasRole($role->name)) {
            return $this->roles()->attach($role);
        }
    }

    /**
     * Assign role to a user.
     *
     * @param string $name
     *
     * @return bool
     */
    public function assignRoleByName($name)
    {
        if (!$this->hasRole($name)) {
            return $this->roles()->attach(
                Role::whereName($name)->firstOrFail()
            );
        }
    }

    /**
     * Assign roles to a user.
     *
     * @param array $names
     *
     * @return bool
     */
    public function assignRolesByName($names)
    {
        foreach ($names as $name) {
            $this->assignRoleByName($name);
        }
    }

    /**
     * Revoke role to a user.
     *
     * @param App\Models\Role $role
     *
     * @return bool
     */
    public function revokeRole(Role $role)
    {
        if ($this->hasRole($role->name)) {
            return $this->roles()->detach($role);
        }
    }

    /**
     * Revoke role to a user.
     *
     * @param string $name
     *
     * @return bool
     */
    public function revokeRoleByName($name)
    {
        if ($this->hasRole($name)) {
            return $this->roles()->detach(
                Role::whereName($name)->firstOrFail()
            );
        }
    }

    /**
     * Revoke roles by name.
     *
     * @param array $names
     *
     * @return bool
     */
    public function revokeRolesByName($names)
    {
        foreach ($names as $name) {
            $this->revokeRoleByName($name);
        }
    }

    /**
     * Revoke All Roles from User.
     *
     * @return bool
     */
    public function revokeAllRoles()
    {
        return $this->roles()->detach();
    }

    /**
     * Get all User Permissions.
     *
     * @return array
     */
    public function getPermissions()
    {
        $permissions = array();
        foreach ($this->roles as $role) {
            $permissions += $role->permissions->lists('name', 'id')->toArray();
        }

        return $permissions;
    }

    /**
     * Check if user has a specific permission.
     *
     * @param Permission name
     *
     * @return bool
     */
    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            foreach ($this->roles as $role) {
                return $role->hasPermission($permission);
            }
        }

        if ($permission instanceof Collection) {
            foreach ($this->roles as $role) {
                return $role->hasPermission($permission);
            }
        }

        foreach ($permission as $p) {
            return $this->hasPermission($p);
        }

        return false;
    }
}
