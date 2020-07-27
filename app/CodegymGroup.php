<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodegymGroup extends Model
{
    public function codegymers() {
        return $this->hasMany(Codegymer::class, 'codegymergroup_id', 'id');
    }
}
