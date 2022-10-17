<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function roles()
    {
        return $this->hasOne(Roles::class, 'id_roles');
    }
}
