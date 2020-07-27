<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codegymer extends Model
{
    protected $guarded = [];

    public function group() {
        return $this->belongsTo(CodegymGroup::class, 'codegymergroup_id', 'id');
    }
}
