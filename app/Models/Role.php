<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Models
use App\Models\User;

class Role extends Model
{
    use SoftDeletes;

    protected $table = 'roles';

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
