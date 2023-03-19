<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use mysql_xdevapi\DatabaseObject;

/**
 * Class Users
 * @package App\Models
 * @property integer id
 * @property string name
 * @property string email
 * @property string password
 */
class Users extends Model
{
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Posts::class, 'userId', 'id');
    }

    protected $hidden = [
        'password'
    ];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
