<?php
namespace Mage2\Ecommerce\Models\Database;

class Permission extends BaseModel
{
    protected $fillable = ['name'];


    /**
     * Permission belongs to many role
     *
     * @return \Mage2\Ecommerce\Models\Database\\Role
     */

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public static function getPermissionByName($name)
    {
        $instance = new static;
        return $instance->where('name', '=', $name)->first();
    }
}
